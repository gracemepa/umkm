<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordResetsTable extends Migration
{
    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();  // Email pengguna
            $table->string('token');  // Token reset password
            $table->timestamp('created_at')->nullable();  // Waktu token dibuat
        });
    }

    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
}
