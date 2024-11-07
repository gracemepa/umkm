<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function login()
    {
        $data['title'] = 'Login';
        return view('auth.login', $data);
    }

    // Proses login
    public function login_process(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required|min:6|max:12',
        ]);

        // Mencoba login dengan kredensial
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        // Jika login gagal, kembali dengan error
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
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

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['role'] = 'owner';
        User::create($validatedData);

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->route('login.form')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.form');
    }
}
