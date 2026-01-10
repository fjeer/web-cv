<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    use SoftDeletes;
    protected $table = 'tb_kategori';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = [];

    public function event()
    {
        return $this->hasMany(Event::class, 'id_kategori', 'id');
    }
}
