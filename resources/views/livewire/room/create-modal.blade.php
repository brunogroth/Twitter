    <x-modal name="new-chat-modal" focusable>
        <div class="p-4">
            @foreach($users as $user)
                <button wire:click="createRoom({{$user->id}})">{{ $user->name }}</button>
            @endforeach
        </div>
    </x-modal>

