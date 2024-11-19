<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika tidak menggunakan plural default
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    // Tentukan kolom yang dapat diisi
    protected $fillable = ['nama_produk', 'harga_jual', 'stok', 'gambar'];
}
