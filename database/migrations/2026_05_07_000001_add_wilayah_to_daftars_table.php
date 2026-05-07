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
        Schema::table('tb_daftar', function (Blueprint $table) {
            // Hapus kolom address lama dan ganti dengan kolom wilayah terstruktur
            $table->string('provinsi')->nullable()->after('gender');
            $table->string('kabkota')->nullable()->after('provinsi');
            $table->string('kecamatan')->nullable()->after('kabkota');
            $table->string('desa')->nullable()->after('kecamatan');
            $table->string('kodepos', 10)->nullable()->after('desa');
            $table->text('alamat_detail')->nullable()->after('kodepos'); // Jalan, RT/RW, dll.

            // Kolom address lama tetap ada sebagai backup, tapi di-nullable
            $table->text('address')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_daftar', function (Blueprint $table) {
            $table->dropColumn(['provinsi', 'kabkota', 'kecamatan', 'desa', 'kodepos', 'alamat_detail']);
        });
    }
};
