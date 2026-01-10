<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Training extends Model
{
    use SoftDeletes;

    protected $table = 'tb_training';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $casts = [
        'tanggal_mulai' => 'date',
        'tanggal_selesai' => 'date',
    ];
    protected $guarded = [];

    public function kursus() {
        return $this->belongsTo(Kursus::class,'id_kursus','id');
    }
}
