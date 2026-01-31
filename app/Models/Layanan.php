<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $table = 'tb_layanan';
    protected $fillable = ['nama_layanan', 'deskripsi_layanan'];
    public $timestamps = true;

    public function subLayanan()
    {
        return $this->hasMany(SubLayanan::class, 'layanan_id', 'id');
    }
}
