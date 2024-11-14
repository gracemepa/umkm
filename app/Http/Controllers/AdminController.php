<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Fungsi untuk menampilkan formulir tambah admin
    public function create()
    {
        // Ambil semua admin dengan role 'owner' dan kirimkan ke view
        $owners = User::where('role', 'owner')->get();
        return view('layouts.admin.create', compact('owners')); // Tampilkan view admin.create dengan data owners
    }

    // Fungsi untuk menyimpan data admin
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'nama' => 'required|string|max:255',
        ]);

        // Simpan data admin ke database
        $owner = new User();
        $owner->username = $request->username;
        $owner->email = $request->email;
        $owner->password = Hash::make($request->password);
        $owner->nama = $request->nama;
        $owner->role = 'owner'; // Set role sebagai owner
        $owner->save();

        // Ambil semua admin (optional filtering, misalnya hanya admins atau owners)
        $owners = User::where('role', 'owner')->get();

        // Redirect kembali dengan pesan sukses dan kirim data admin
        return redirect()->route('admin.create')->with('success', 'Admin berhasil ditambahkan.')->with('owners', $owners);
    }
    // Fungsi untuk menampilkan formulir edit admin
    // Metode untuk menampilkan halaman edit
    public function edit($id)
    {
        $owner = User::findOrFail($id);  // Cari admin berdasarkan ID
        return view('layouts.admin.edit_admin', compact('owner'));  // Tampilkan view edit_admin dengan data owner
    }
    

// Metode untuk mengupdate data admin
public function update(Request $request, $id)
{
    // Validasi data
    $request->validate([
        'username' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $id,
        'password' => 'nullable|min:6', // Password opsional
        'nama' => 'required|string|max:255',
    ]);

    // Mencari admin berdasarkan ID
    $owner = User::findOrFail($id);
    $owner->username = $request->username;
    $owner->email = $request->email;

    // Jika password diisi, hash dan simpan
    if ($request->filled('password')) {
        $owner->password = Hash::make($request->password);
    }

    $owner->nama = $request->nama;
    $owner->save();

    // Redirect dengan pesan sukses
    return redirect()->route('admin.create')->with('success', 'Admin berhasil diperbarui.');
}

    // Fungsi untuk menghapus data admin
    public function delete($id)
    {
        $owner = User::findOrFail($id);
        $owner->delete(); // Hapus admin berdasarkan ID

        // Redirect kembali setelah penghapusan
        return redirect()->route('admin.create')->with('success', 'Admin berhasil dihapus.');
    }
}
