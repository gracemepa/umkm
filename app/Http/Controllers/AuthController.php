<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\PasswordReset;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function login()
    {
        $data['title'] = 'Login';
        return view('auth.login', $data);
    }

    public function login_process(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required|min:6|max:12',
        ]);
    
        // Coba login dengan kredensial yang diberikan
        if (Auth::attempt($credentials)) {
            // Ambil data pengguna yang sedang login
            $user = Auth::user();
    
            // Periksa apakah email pengguna sudah diverifikasi
            if (!$user->email_verified_at) {
                // Logout dan kirim pesan error
                Auth::logout();
                return back()->withErrors([
                    'email' => 'Email Anda belum diverifikasi. Silakan cek email Anda untuk link verifikasi.',
                ]);
            }
    
            // Regenerasi sesi
            $request->session()->regenerate();
    
            // Arahkan pengguna berdasarkan role
            return $user->role === 'owner'
                ? redirect()->route('admin.dashboard')
                : redirect()->route('user.dashboard');
        }
    
        // Jika login gagal, kembali dengan pesan error
        return back()->withErrors([
            'username' => 'Kredensial yang Anda masukkan salah.',
        ]);
    }
    

    // Menampilkan halaman registrasi
    public function register()
    {
        $data['title'] = 'Register';
        return view('auth.register', $data);
    }

    // Proses registrasi
    public function register_process(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:12',
        ]);
    
        // Enkripsi password dan set role default
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['role'] = 'user'; // Default role user, bisa diganti menjadi 'admin' jika dibutuhkan
        $validatedData['verification_token'] = Str::random(64);
        
        // Membuat pengguna baru
        $user = User::create($validatedData);
    
        // Mengirim email verifikasi
        try {
            Mail::send('emails.verify_email', ['user' => $user], function ($message) use ($user) {
                $message->to($user->email);
                $message->subject('Verifikasi Email Anda');
            });
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal mengirim email verifikasi. Coba lagi nanti.');
        }
    
        // Redirect ke halaman login dengan pesan sukses
        return redirect()->route('login.form')->with('success', 'Registrasi berhasil! Silakan cek email Anda untuk verifikasi.');
    }
    
    public function verifyEmail($token)
{
    // Cari user berdasarkan token
    $user = User::where('verification_token', $token)->first();

    // Jika tidak ditemukan, tampilkan pesan error
    if (!$user) {
        return redirect()->route('login.form')->with('error', 'Token verifikasi tidak valid.');
    }

    // Verifikasi email pengguna
    $user->email_verified_at = now();
    $user->verification_token = null; // Set token menjadi null setelah verifikasi
    $user->save();

    // Arahkan pengguna ke halaman login dengan pesan sukses
    return redirect()->route('login.form')->with('success', 'Email Anda berhasil diverifikasi. Silakan login.');
}


    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.form');
    }

    public function forgotPassword()
    {
        $data['title'] = 'Forgot Password';
        return view('auth.forgotPassword');
    }

    // Menangani request untuk mengirimkan link reset password
    public function sendResetLink(Request $request)
    {
        // Validasi email yang dimasukkan
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        // Cari user berdasarkan email
        $user = User::where('email', $request->email)->first();

        // Buat token reset password
        $token = Str::random(64);

        // Simpan token ke tabel password_resets
        PasswordReset::create([
            'email' => $user->email,
            'token' => $token,
            'created_at' => now(),
        ]);

        // Kirim email berisi link reset password
        $resetLink = url('/auth/reset-password/' . $token);
        Mail::send('emails.forgot_password', ['resetLink' => $resetLink], function ($message) use ($user) {
            $message->to($user->email);
            $message->subject('Reset Password');
        });

        return back()->with('success', 'Link reset password telah dikirim ke email Anda.');
    }

    // Menampilkan form untuk reset password
    public function resetPasswordForm($token)
    {
        return view('auth.resetPassword', ['token' => $token]);
    }

    // Menangani proses reset password
    public function resetPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:8|confirmed',
            'token' => 'required|exists:password_resets,token',
        ]);

        // Validasi token
        $resetRecord = PasswordReset::where('token', $request->token)->first();

        if (!$resetRecord) {
            return back()->with('error', 'Token reset password tidak valid.');
        }

        // Cari user berdasarkan email yang ada di tabel password_resets
        $user = User::where('email', $resetRecord->email)->first();

        // Update password user
        $user->update(['password' => Hash::make($request->password)]); 

        // Hapus record di tabel password_resets
        PasswordReset::where('email', $user->email)->delete();

        return redirect()->route('login.form')->with('success', 'Password berhasil direset. Silakan login dengan password baru Anda.');
    }
}
