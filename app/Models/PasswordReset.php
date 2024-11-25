<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    use HasFactory;

    public $timestamps = false; // Karena tabel password_resets tidak memiliki kolom updated_at
    protected $fillable = ['email', 'token', 'created_at'];
}
