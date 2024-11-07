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
        Schema::create('users', function (Blueprint $table): void { 
            $table->id();
            $table->string('username', 50)->unique();  
            $table->string('email', 200)->unique();
            $table->string('password', 255);
            $table->string('nama', 100);
            $table->enum('role', ['admin', 'owner']);
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users'); // Drop tabel 'users' alih-alih 'user' wkwk
    }
};