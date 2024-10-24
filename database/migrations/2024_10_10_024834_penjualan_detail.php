<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penjualan_detail', function (Blueprint $table) {
            $table->id('id_penjualan_detail');
            $table->unsignedBigInteger('id_penjualan')->nullable();
            $table->unsignedBigInteger('id_produk')->nullable();
            $table->integer('jumlah')->nullable();
            $table->decimal('harga', 10, 2)->nullable();
            $table->decimal('subtotal', 10, 2)->nullable();
        
            // Foreign Keys
            $table->foreign('id_penjualan')->references('id_penjualan')->on('penjualan')->onDelete('no action')->onUpdate('no action');
            $table->foreign('id_produk')->references('id_produk')->on('produk')->onDelete('no action')->onUpdate('no action');
        
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
