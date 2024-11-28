<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id(); // Kolom primary key untuk tabel carts
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relasi ke tabel users
            $table->unsignedBigInteger('product_id'); // Kolom relasi ke tabel produk

            // Definisikan foreign key secara manual
            $table->foreign('product_id')->references('id_produk')->on('produk')->onDelete('cascade');
            
            $table->integer('quantity')->default(1); // Kolom jumlah barang
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts'); // Menghapus tabel carts
    }
}
