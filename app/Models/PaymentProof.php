<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentProof extends Model
{
    use HasFactory;

    // Tentukan kolom yang boleh diisi
    protected $fillable = [
        'order_id', // Pastikan ada order_id untuk menghubungkan dengan Order
        'proof',    // Kolom untuk menyimpan bukti pembayaran
        'status',   // Status pembayaran, jika diperlukan (misal: pending, approved, rejected)
    ];

    // Relasi terbalik, untuk mendapatkan order yang terkait dengan bukti pembayaran
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
