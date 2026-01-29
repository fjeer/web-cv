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
        Schema::create('tb_mitra', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mitra');
            $table->string('logo_mitra');
            $table->string('email_mitra')->unique();
            $table->string('no_telp_mitra');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_mitra');
    }
};
