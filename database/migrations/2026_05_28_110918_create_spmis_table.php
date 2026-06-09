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
        Schema::create('spmi', function (Blueprint $table) {
            $table->id();
            $table->text('tentang_spmi');
            $table->text('deskripsi_monev');
            $table->text('ruang_lingkup_monev')->nullable();
            $table->text('output_monev')->nullable();
            $table->text('deskripsi_ami');
            $table->text('tujuan_ami')->nullable();
            $table->text('pelaksanaan_ami')->nullable();
            $table->text('dokumen_spmi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spmi');
    }
};
