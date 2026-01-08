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
        Schema::create('tb_event', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('detail_event');
            $table->unsignedBigInteger('id_kategori');
            $table->string('gambar_event')->nullable();
            $table->string('lokasi');
            $table->integer('kuota');
            $table->date('tanggal_event');
            $table->boolean('status_event')->default(1);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_kategori')->references('id')->on('tb_kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_event');
    }
};
