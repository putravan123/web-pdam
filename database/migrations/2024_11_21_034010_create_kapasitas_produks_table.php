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
        Schema::create('kapasitas_produks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->string('image')->nullable();
            $table->string('imageTable', 100)->nullable();
            $table->string('nama_mata_air')->nullable();
            $table->integer('air_baku')->nullable();
            $table->integer('kapasitas_sistem')->nullable();
            $table->integer('produksi')->nullable();
            $table->integer('sisa_kapasitas')->nullable();
            $table->string('cabang_unit')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kapasitas_produks');
    }
};
