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
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id('id_penjualan');
            $table->unsignedBigInteger('id_pelanggan')->nullable();
            $table->date('tgl_penjualan')->nullable();
            $table->decimal('total', 10, 2)->nullable();
        
            // Foreign Key
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggan')->onDelete('no action')->onUpdate('no action');
        
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
