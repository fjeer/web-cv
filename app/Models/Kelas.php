<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'tb_kelas';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $timestamps = true;
    use SoftDeletes;

    protected $guarded = [];

    public function kursus()
    {
        return $this->hasMany(Kursus::class, 'id_kelas', 'id');
    }
}
