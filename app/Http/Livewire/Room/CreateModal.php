<?php

namespace App\Http\Livewire\Room;

use App\Models\Room;
use App\Models\User;
use Livewire\Component;

class CreateModal extends Component
{
    public function render()
    {
        return view('livewire.room.create-modal',
        [
            'users' => User::whereNot('id', auth()->id())->get()
        ]);
    }

    public function createRoom(int $id)
    {
        $room = Room::query()
            ->create();
        $room->users()->attach($id);
        $room->users()->attach(auth()->id());

        $this->emit('room::select', ['room' => $room->id]);
    }
}
