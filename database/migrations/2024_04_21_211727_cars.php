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
        $table->string('owner_id')->index();;
        $table->string('kode_mobil');
        $table->string('merk');
        $table->string('model');
        $table->string('plat');
        $table->string('transmisi');
        $table->string('seat');
        $table->string('bahan_bakar');
        $table->string('keterangan');
        $table->bigInteger('tarif');
        $table->string('foto_mobil')->nullable();
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
