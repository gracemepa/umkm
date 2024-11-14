<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika tidak menggunakan plural default
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
    // Tentukan kolom yang dapat diisi
    protected $fillable = ['nama_kategori'];
}
