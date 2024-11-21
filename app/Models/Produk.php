<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk'; 

    protected $primaryKey = 'id_produk'; 

    // Tambahkan 'harga_jual' dan 'gambar' ke dalam $fillable
    protected $fillable = [
        'nama_produk', 'harga_jual', 'stok', 'gambar' // Menambahkan 'harga_jual' dan 'gambar'
    ];

    public function produkDetails()
    {
        return $this->hasMany(Produkdetail::class, 'id_produk');
    }
}
