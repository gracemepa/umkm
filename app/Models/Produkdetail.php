<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produkdetail extends Model
{
    use HasFactory;

    protected $table = 'produkdetail';
    protected $primaryKey = 'id_produkdetail';
    protected $fillable = ['id_produk', 'deskripsi', 'spesifikasi'];

    // Relasi ke Produk
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk', 'id_produk');
    }
}
