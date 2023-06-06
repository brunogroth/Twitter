<?php

namespace App\Http\Livewire\Room;

use Livewire\Component;

class CreateModal extends Component
{
    public function render()
    {
        return view('livewire.room.create-modal',
        [
            'users' => User::all()
        ]);
    }
}
