<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Barangmasuk extends Model
{
    use HasFactory;
    protected $table = 'barangmasuk';
    protected $primaryKey = 'id_barangmasuk';
    protected $fillable = ['nama_barang', 'tgl_masuk', 'total', 'gambar', 'harga_beli', 'subtotal'];  
    public function getTglMasukAttribute($value)
    {
        return Carbon::parse($value);
    }

    public function getSubtotalAttribute()
    {
        return $this->harga_beli * $this->total;
    }
}
