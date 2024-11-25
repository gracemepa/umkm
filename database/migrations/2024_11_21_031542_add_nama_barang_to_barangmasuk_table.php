<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('barangmasuk', function (Blueprint $table) {
        $table->string('nama_barang')->nullable()->after('id_supplier');
    });
}

public function down()
{
    Schema::table('barangmasuk', function (Blueprint $table) {
        $table->dropColumn('nama_barang');
    });
}
};
