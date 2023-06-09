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
        Schema::create('kerentanan_fisik', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kabupaten_id');
            $table->integer('rumah');
            $table->double('fasilitas_umum');
            $table->double('fasilitas_kritis');
            $table->double('hasil_kerenfis')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kerentanan_fisik');
    }
};
