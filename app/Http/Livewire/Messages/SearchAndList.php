<?php

namespace App\Http\Livewire\Messages;

use App\Models\Room;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class SearchAndList extends Component
{
    public function render()
    {
        return view('livewire.messages.search-and-list', [
            'rooms' => Room::whereHas('users', function(Builder $query){
                return $query->where('user_id', '=', auth()->id());
            })
        ]);
    }
}
