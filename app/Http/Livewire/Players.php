<?php

namespace App\Http\Livewire;

use App\Nova\Stat;
use App\Player;
use Livewire\Component;

class Players extends Component
{
    public function render()
    {
        return view('livewire.players', [
            'players' => Player::with('stats')->get(),
        ]);
    }
}
