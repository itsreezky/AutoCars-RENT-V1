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

        Schema::create('users', function (Blueprint $table) {
            $table->id()->primary();;
            $table->string('uuid')->index();
            $table->bigInteger('nik')->nullable();
            $table->string('nama');
            $table->string('kelamin')->nullable();
            $table->string('email');
            $table->string('password');
            $table->string('hp')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kota')->nullable();
            $table->string('foto_ktp')->nullable();
            $table->string('foto_profile')->nullable();
            $table->string('status')->default('Regular Member');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
