<div>
    <div class="sticky top-0 w-full backdrop-blur-lg">
        <div class="flex m-2 justify-between items-center">
            <div class="flex m-2">
                <h2 class="px-4 py-2 text-xl font-semibold ">Messages</h2>
            </div>
            <livewire:room.create />
        </div>
        <div class="flex w-80 text-center mx-6 text-gray-500 mb-3">
            <x-icons.search class="absolute mt-2 ml-4"/>
            <input type="text"
                   class="flex bg-black w-full rounded-full font-thin text-white focus:outline-none h-10 px-10 border-line"
                   placeholder="Search Direct Messages">
        </div>
    </div>
    <div class="w-full">
        @foreach($rooms as $room)
            @php

            $user = $room->users->first();
            @endphp
            <x-messages.contact
                image="https://media.istockphoto.com/id/1192437350/vector/golden-egg-icon-flat.jpg?s=612x612&w=0&k=20&c=ca6wwY-hqFEgukmH8RHhEAEGg4KaYuw0TlIwWZdwxBA="
                username="{{$user->name}}" at="@ {{$user->nickname}}"
                :is-selected="$room->id == $selectedRoom?->id"
                wire:click="selectRoom({{$room->id}})"

            >Mensagem</x-messages.contact>
        @endforeach
    </div>
</div>
