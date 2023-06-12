<?php

namespace App\Http\Livewire\Messages;

use App\Models\Room;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class SearchAndList extends Component
{

    public ?Room $selectedRoom = null;
    protected $listeners = ['room::select' => 'selectRoom'];

    public function render(): View
    {
        return view('livewire.messages.search-and-list', [
            'rooms' => Room::query()
            ->whereHas('users', function(Builder $query){
                return $query->where('user_id', '=', auth()->id());
            })
            ->with('users', function($query){
                return $query->where('user_id', '!=', auth()->id());
            })
            ->get()
        ]);
    }

    public function selectRoom($id):void
    {
        $this->selectedRoom = Room::find($id);
    }
}
