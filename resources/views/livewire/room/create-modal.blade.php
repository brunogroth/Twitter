    <x-modal name="new-chat-modal" focusable>
        <div class="p-4 flex flex-col space-y-2">
            @foreach($users as $user)
                <div>
                    <button wire:click="createRoom({{$user->id}})" class="py-2 px-3 bg-gray-600 bg-opacity-40 hover:bg-opacity-20 w-full">{{ $user->name }}</button>
                </div>
            @endforeach
        </div>
    </x-modal>

