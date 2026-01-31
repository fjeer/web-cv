<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubLayanan extends Model
{
    protected $table = 'tb_sub_layanan';
    protected $fillable = ['layanan_id', 'nama_sub_layanan', 'deskripsi_sub_layanan'];
    public $timestamps = true;

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'layanan_id', 'id');
    }
}
