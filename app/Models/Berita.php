<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Berita extends Model
{
    use SoftDeletes;

    protected $table = 'tb_berita';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $casts = [
        'tanggal_berita' => 'date'
    ];
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_author', 'id');
    }}
