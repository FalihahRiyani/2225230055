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
        Schema::create('_falihah', function (Blueprint $table) {
            $table->string('Nama');
            $table->string('Email');
            $table->string('No');
            $table->string('Judul');
            $table->string('Tanggal');
            $table->string('Lama');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_falihah');
    }
};
