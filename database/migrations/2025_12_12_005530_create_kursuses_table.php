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
        Schema::create('tb_kursus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kursus');
            $table->string('slug')->unique();
            $table->text('deskripsi_kursus');
            $table->text('detail_kursus');
            $table->unsignedBigInteger('id_kelas');
            $table->decimal('harga_kursus', 10, 2);
            $table->decimal('rating_kursus', 3, 2)->default(0);
            $table->string('gambar_kursus')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_kelas')->references('id')->on('tb_kelas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_kursus');
    }
};
