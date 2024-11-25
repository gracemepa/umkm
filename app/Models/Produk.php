<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    protected $fillable = [
        'nama_produk', 'harga_jual', 'stok', 'gambar', 'id_kategori' // Tambahkan id_kategori pada $fillable
    ];

    /**
     * Definisikan relasi dengan model Kategori.
     */
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }

    /**
     * Relasi dengan produk detail.
     */
    public function produkDetails()
    {
        return $this->hasMany(Produkdetail::class, 'id_produk');
    }
}
