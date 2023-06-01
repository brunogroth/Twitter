<?php

namespace App\Http\Livewire\Room;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Create extends Component
{
    public bool $modal = false;

    public function render(): View
    {
        return view('livewire.room.create');
    }

    public function modal(){
        return $this->modal = true;
    }
}
