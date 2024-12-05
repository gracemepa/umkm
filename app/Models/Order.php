<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',         // Kolom untuk ID pengguna yang membuat order
        'total_price',     // Kolom untuk total harga order
        'status',          // Status order, misalnya 'pending', 'paid', etc.
    ];
    // Definisikan relasi dengan PaymentProof (satu ke satu)
    public function paymentProof()
    {
        return $this->hasOne(PaymentProof::class);
    }
}
