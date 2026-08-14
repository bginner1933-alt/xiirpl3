<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama_barang');
            $table->integer('harga_barang');
            $table->text('deskripsi');
            $table->integer('stok');

            $table->unsignedBigInteger('id_kategori');

            $table->foreign('id_kategori')
                  ->references('id_kategori')
                  ->on('kategori');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
