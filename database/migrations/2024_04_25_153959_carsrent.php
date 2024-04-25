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
        Schema::create('carsrent', function (Blueprint $table) {
            $table->id()->primary();;
            $table->string('rent_id')->index();
            $table->string('kode_mobil');
            $table->string('penyewa');
            $table->string('pemilik');
            $table->date('tanggal_rent');
            $table->date('akhir_rent');
            $table->string('tarif_rent');
            $table->string('total_rent');
            $table->string('bukti_pembayaran');
            $table->string('status')->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carsrent');
    }
};
