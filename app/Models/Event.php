<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'tb_event';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $timestamps = true;
    use SoftDeletes;
    protected $guarded = [];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id');
    }
}
