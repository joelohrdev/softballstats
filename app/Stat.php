<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    protected $dates = [
        'date',
    ];

    protected $fillable = [
        'player_id',
        'date',
        'inning',
        'outcome',
        'notes'
    ];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
