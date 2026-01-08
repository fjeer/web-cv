<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'tb_kategori';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $timestamps = true;
    use SoftDeletes;

    protected $guarded = [];

    public function event()
    {
        return $this->hasMany(Event::class, 'id_kategori', 'id');
    }
}
