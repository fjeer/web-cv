<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailLayanan extends Model
{
    protected $table = 'tb_detail_layanan';
    protected $fillable = ['sub_layanan_id', 'judul_detail', 'isi_detail'];
    public $timestamps = true;

    public function subLayanan()
    {
        return $this->belongsTo(SubLayanan::class, 'sub_layanan_id', 'id');
    }
}
