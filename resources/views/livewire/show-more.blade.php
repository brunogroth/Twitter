<div class="{{$this->count > 0 ? 'block' : 'hidden'}} text-center text-primary py-3 border-line border-b-[0.625px]
                rounded bg-transparent hover:bg-gray-950 w-full cursor-pointer"
     wire:click="more">
    Show {{$this->count}} {{$this->count <= 1 ? 'Tweet' : 'Tweets' }}
</div>
