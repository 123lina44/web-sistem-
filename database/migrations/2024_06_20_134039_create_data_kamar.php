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
        Schema::create('data_kamar', function (Blueprint $table) {
            $table->id('id_kamar');
            $table->string('no_kamar');
            $table->string('harga');
            $table->string('ukuran_kamar');
            $table->string('status');
            $table->string('jumlah_max_kamar');
            $table->string('foto_kamar');
            $table->text('deskripsi');
            $table->string('slug_kamar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_kamar');
    }
};
