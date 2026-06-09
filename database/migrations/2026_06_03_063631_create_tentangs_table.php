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
        Schema::create('tentang', function (Blueprint $table) {
            $table->id();
            $table->string('gambar_1')->nullable();
            $table->string('gambar_2')->nullable();
            $table->integer('akreditasi_unggul')->nullable(); 
            $table->integer('auditor_internal')->nullable(); 
            $table->text('page_explanation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tentang');
    }
};
