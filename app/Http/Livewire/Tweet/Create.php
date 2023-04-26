<?php

namespace App\Http\Livewire\Tweet;

use Illuminate\View\View;
use Livewire\Component;

class Create extends Component
{
    public ?string $body = null;

    public function render(): View
    {
        return view('livewire.tweet.create');
    }
}
