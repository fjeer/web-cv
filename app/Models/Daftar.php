<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    protected $table = 'tb_daftar';

    protected $fillable = [
        'no_daftar',
        'name',
        'email',
        'phone',
        'gender',
        'address',
        'training_id',
        'event_id',
    ];

    public function training()
    {
        return $this->belongsTo(Training::class, 'training_id', 'id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }
}