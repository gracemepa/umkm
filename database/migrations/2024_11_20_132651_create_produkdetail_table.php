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
        if (!Schema::hasTable('produkdetail')) {
            Schema::create('produkdetail', function (Blueprint $table) {
                $table->id('id_produkdetail');
                $table->unsignedBigInteger('id_produk');
                $table->text('deskripsi')->nullable();
                $table->text('spesifikasi')->nullable();
                $table->timestamps();
    
                // Foreign Key
                $table->foreign('id_produk')->references('id_produk')->on('produk')->onDelete('cascade');
            });
        }
    }
    
    public function down(): void
    {
        Schema::dropIfExists('produkdetail');
    }
    
};
