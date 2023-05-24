<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Timeline extends Component
{
    public int $per_page = 10;
    protected $listeners =['tweet::created' => '$refresh'];
    public function render():View
    {

        return view('livewire.timeline', [
            'tweets' => Tweet::query()->latest()->paginate($this->per_page)
        ]);
    }

    public function loadMore():void
    {
        $this->per_page += 10;
    }
}
