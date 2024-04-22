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
    Schema::create('cars', function (Blueprint $table) {
        $table->id()->primary();;
        $table->string('uuid')->index();;
        $table->string('kode_mobil');
        $table->string('merk');
        $table->string('model');
        $table->string('plat');
        $table->bigInteger('tarif');
        $table->string('keterangan');
        $table->string('spesifikasi');
        $table->string('foto_mobil1')->nullable();
        $table->string('foto_mobil2')->nullable();
        $table->string('foto_mobil3')->nullable();
        $table->string('foto_mobil4')->nullable();
        $table->string('status')->default('Available');
        $table->timestamps();
    });
  }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
