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
        Schema::create('tentang_pdams', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('title')->nullable()->default('text');
            $table->text('content')->nullable()->default('text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tentang_pdams');
    }
};
