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
        Schema::create('tb_berita', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('detail_berita');
            $table->string('gambar_berita')->nullable();
            $table->unsignedBigInteger('id_author');
            $table->date('tanggal_berita');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_author')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_berita');
    }
};
