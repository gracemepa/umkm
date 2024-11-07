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
        Schema::create('produk', function (Blueprint $table) {
            $table->id('id_produk');
            $table->string('nama_produk', 100)->nullable();
            $table->unsignedBigInteger('id_kategori')->nullable();
            $table->decimal('harga_jual', 10, 2)->nullable();
            $table->integer('stok')->nullable();
        
            // Foreign Key
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori')->onDelete('no action')->onUpdate('no action');
        
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
