<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriUser extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';

    public function produkuser()
    {
        return $this->hasMany(Produkuser::class, 'id_kategori', 'id_kategori');
    }
}
