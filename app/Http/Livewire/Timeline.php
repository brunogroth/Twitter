<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;

/**
 * @property-read Collection $tweets
 */
class Timeline extends Component
{
    public int $per_page = 10;
    protected $listeners = [
        //'tweet::created' => '$refresh',
        'showMore' => '$refresh'
    ];

    public function render(): View
    {

        return view('livewire.timeline');
    }

    public function getTweetsProperty():LengthAwarePaginator
    {
        $data = Tweet::query()->latest()
            ->paginate($this->per_page);

        session()->put('last-tweet', $data->first()->id);

        return $data;
    }

    public function loadMore(): void
    {
        $this->per_page += 10;
    }
}
