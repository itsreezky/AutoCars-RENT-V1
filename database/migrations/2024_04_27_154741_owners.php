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

        Schema::create('owners', function (Blueprint $table) {
            $table->id()->primary();;
            $table->string('owner_id')->index();
            $table->bigInteger('nik');
            $table->string('nama');
            $table->string('kelamin');
            $table->string('email');
            $table->string('password');
            $table->string('hp');
            $table->string('alamat_garasi');
            $table->string('kota');
            $table->string('foto_ktp');
            $table->string('foto_profile')->nullable();
            $table->string('status')->default('PENDING');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owners');
    }
};
