<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Menyebutkan nama tabel secara eksplisit jika nama tabel tidak mengikuti konvensi Laravel
    protected $table = 'users';  

    // Atribut yang dapat diisi secara massal
    protected $fillable = [
        'username', 'email', 'password', 'role','nama'
    ];

    // Atribut yang disembunyikan dalam serialisasi (misalnya ketika mengonversi model ke array)
    protected $hidden = [
        'password', 
        'remember_token',
    ];

    // Atribut yang akan di-cast ke tipe data tertentu
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',  // Agar password di-hash dengan aman
        ];
    }
}
