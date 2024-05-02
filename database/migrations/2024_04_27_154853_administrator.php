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

        Schema::create('administrators', function (Blueprint $table) {
            $table->id()->primary();;
            $table->string('uuid')->index();
            $table->string('nama');
            $table->string('email');
            $table->string('password');
            $table->string('status')->default('Administrator');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrators');
    }
};
