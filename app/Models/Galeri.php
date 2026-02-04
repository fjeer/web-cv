<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'tb_galeri';
    protected $fillable = [
        'nama_galeri',
        'deskripsi_galeri',
        'foto_galeri',
    ];
    public $timestamps = true;
}
