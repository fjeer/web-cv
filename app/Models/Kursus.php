<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kursus extends Model
{
    use SoftDeletes;
    protected $table = 'tb_kursus';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = [];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas', 'id');
    }

    public function training()
    {
        return $this->hasMany(Training::class,'id_kursus','id');
    }
}
