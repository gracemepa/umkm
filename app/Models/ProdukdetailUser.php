<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdukdetailUser extends Model
{
    protected $table = 'produkdetail';
    protected $primaryKey = 'id_produkdetail';

    public function produkuser()
    {
        return $this->belongsTo(Produkuser::class, 'id_produk', 'id_produk');
    }
}

