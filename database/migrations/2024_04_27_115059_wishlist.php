<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   */
     public function up(): void
    {
    Schema::create('wishlist', function (Blueprint $table) {
        $table->id()->primary();;
        $table->string('uuid')->index();;
        $table->string('foto_mobil');
        $table->string('kode_mobil');
        $table->string('owner');
        $table->string('merk');
        $table->string('model');
        $table->bigInteger('tarif');
        $table->timestamps();
    });
  }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wishlist');
    }
};
