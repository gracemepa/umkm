<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriUser extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';

    protected $fillable = ['nama_kategori', 'gambar']; // Menambahkan gambar_kategori ke fillable

    public function produkuser()
    {
        return $this->hasMany(Produkuser::class, 'id_kategori', 'id_kategori');
    }

    public function getGambarKategoriAttribute($value)          // Fungsi untuk mendapatkan URL gambar kategori
    {
        // Mengembalikan gambar dari storage, jika tidak ada, gunakan gambar default
        return $value ? asset('storage/' . $value) : asset('assets/images/default-category.png');
    }
}
