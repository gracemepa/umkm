<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produkuser extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';

    public function kategoriUser()
    {
        return $this->belongsTo(KategoriUser::class, 'id_kategori', 'id_kategori');
    }

    public function produkdetailUser()
    {
        return $this->hasMany(ProdukdetailUser::class, 'id_produk', 'id_produk');
    }
}

