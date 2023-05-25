<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Illuminate\Contracts\View\View;
use Livewire\Component;

/**
 * @property int $count
 */
class ShowMore extends Component
{
    public function render():View
    {
        return view('livewire.show-more');
    }

    public function more(): void
    {
        $this->emitTo(Timeline::class, 'showMore');
    }

    public function getCountProperty(): int
    {
        return Tweet::query()
            ->where('id', '>', session('last-tweet', 0))
            ->count();
    }
}
