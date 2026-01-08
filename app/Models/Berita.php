<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'tb_berita';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $timestamps = true;
    use SoftDeletes;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_author', 'id');
    }}
