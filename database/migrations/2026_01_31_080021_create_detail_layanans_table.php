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
        Schema::create('tb_detail_layanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sublayanan_id');
            $table->string('judul_detail');
            $table->text('deskripsi_detail');
            $table->string('gambar_detail')->nullable();
            $table->timestamps();

            $table->foreign('sublayanan_id')->references('id')->on('tb_sublayanan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_detail_layanan');
    }
};
