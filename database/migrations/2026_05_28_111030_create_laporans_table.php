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
        Schema::create('laporan', function (Blueprint $table) {
            $table->id();
            $table->string('deskripsi_monev')->nullable();
            $table->string('dokumen_monev')->nullable();
            $table->string('informasi_tambahan_monev')->nullable();
            $table->string('deskripsi_ami')->nullable();
            $table->string('dokumen_ami')->nullable();
            $table->string('informasi_tambahan_ami')->nullable();
            $table->string('deskripsi_rtm')->nullable();
            $table->string('dokumen_rtm')->nullable();
            $table->string('informasi_tambahan_rtm')->nullable();
            $table->string('deskripsi_rtl')->nullable();
            $table->string('dokumen_rtl')->nullable();
            $table->string('informasi_tambahan_rtl')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan');
    }
};
