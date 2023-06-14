<?php

namespace App\Http\Livewire\Room;

use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class Chat extends Component
{
    public ?Room $room = null;
    public ?User $recipient = null;

    protected $listeners = ['room::chat' => 'selectRoom'];

    public function render()
    {
        return view('livewire.room.chat');
    }

    public function selectRoom($id)
    {
        $this->room = Room::query()->with('users', function ($query) {
            return $query->where('user_id', '!=', auth()->id());
        })->where('id', '=', $id)->first();

        $this->recipient = $this->room?->users?->first();
    }
}
