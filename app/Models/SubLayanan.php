<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubLayanan extends Model
{
    protected $table = 'tb_sublayanan';
    protected $fillable = ['layanan_id', 'nama_sublayanan', 'deskripsi_sublayanan','gambar_sublayanan','overview'];
    public $timestamps = true;

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'layanan_id', 'id');
    }
}
