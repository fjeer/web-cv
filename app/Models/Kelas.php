<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use SoftDeletes;
    protected $table = 'tb_kelas';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = [];

    public function kursus()
    {
        return $this->hasMany(Kursus::class, 'id_kelas', 'id');
    }
}
