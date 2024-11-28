<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'carts';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
    ];

    // Relasi ke model User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relasi ke model Product
    public function product()
    {
        return $this->belongsTo(Produk::class, 'product_id', 'id_produk');
    }
}
