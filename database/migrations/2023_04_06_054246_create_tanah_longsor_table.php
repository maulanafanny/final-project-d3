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
        Schema::create('tanah_longsor', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kabupaten_id');
            $table->integer('kerentanan_gerakan_tanah');
            $table->string('latitude');
            $table->string('longtitude');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanah_longsor');
    }
};
