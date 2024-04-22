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
            $table->id() ->primary();;
            $table->string('uuid') ->index();
            $table->bigInteger('nik');
            $table->string('nama');
            $table->string('kelamin');
            $table->string('email');
            $table->string('password');
            $table->string('hp');
            $table->string('alamat');
            $table->string('kota');
            $table->string('bank');
            $table->bigInteger('no_rekening');
            $table->string('foto_profile') ->nullable();
            $table->string('status') ->default('Member');
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
