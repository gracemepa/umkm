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
        Schema::create('barangmasuk_detail', function (Blueprint $table) {
            $table->id('id_barangmasuk_detail');
            $table->unsignedBigInteger('id_barangmasuk')->default(0);
            $table->unsignedBigInteger('id_produk')->default(0);
            $table->integer('jumlah')->default(0);
            $table->decimal('harga_beli', 10, 2)->nullable();
            $table->decimal('subtotal', 10, 2)->nullable();
        
            // Foreign Keys
            $table->foreign('id_barangmasuk')->references('id_barangmasuk')->on('barangmasuk')->onDelete('no action')->onUpdate('no action');
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
