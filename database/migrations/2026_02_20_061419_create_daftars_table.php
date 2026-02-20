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
        Schema::create('tb_daftar', function (Blueprint $table) {
            $table->id();
            $table->string('no_daftar')->unique()->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('gender');
            $table->text('address');
            $table->unsignedBigInteger('training_id')->nullable();
            $table->unsignedBigInteger('event_id')->nullable();
            $table->timestamps();

            $table->foreign('training_id')->references('id')->on('tb_training')->onDelete('set null');
            $table->foreign('event_id')->references('id')->on('tb_event')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_daftar');
    }
};
