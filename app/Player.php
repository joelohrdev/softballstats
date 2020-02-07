<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'number',
    ];

    public function stats()
    {
        return $this->hasMany(Stat::class);
    }
}
