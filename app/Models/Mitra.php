<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $table = 'tb_mitra';
    protected $fillable = [
        'nama_mitra',
        'logo_mitra',
        'email_mitra',
        'no_telp_mitra',
    ];
    public $timestamps = true;
    
}
