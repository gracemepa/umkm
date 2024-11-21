<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produkdetail extends Model
{
    use HasFactory;

    protected $table = 'produkdetail'; 
    protected $primaryKey = 'id_produkdetail'; // Primary key yang benar

    protected $fillable = [
        'id_produk', 'deskripsi', 'spesifikasi'
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk', 'id_produk');
    }
}

