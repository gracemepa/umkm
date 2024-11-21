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
        Schema::create('barangmasuk', function (Blueprint $table) {
            $table->id('id_barangmasuk');
            $table->unsignedBigInteger('id_supplier')->nullable();
            $table->date('tgl_masuk')->nullable();
            $table->decimal('total', 10, 2)->nullable();
            $table->decimal('harga_beli', 10, 2)->nullable(); // Menambahkan kolom harga_beli
            $table->decimal('subtotal', 10, 2)->nullable();  // Menambahkan kolom subtotal

            // Foreign Key
            $table->foreign('id_supplier')->references('id_suplier')->on('supplier')->onDelete('no action')->onUpdate('no action');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangmasuk');
    }
};

