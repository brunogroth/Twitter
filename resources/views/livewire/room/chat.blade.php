<div class="
        border-x-[0.625px] border-lines relative h-full
        min-w-[580px] flex justify-between flex-col
        ">
    @if($room)
        <div class="flex align-center space-x-2 px-4 py-2 h-auto">
            <div>
                <img alt="User" draggable="true" class="rounded-full w-10"
                     src="https://media.istockphoto.com/id/1192437350/vector/golden-egg-icon-flat.jpg?s=612x612&w=0&k=20&c=ca6wwY-hqFEgukmH8RHhEAEGg4KaYuw0TlIwWZdwxBA="
                />
            </div>

            <div class="flex items-center text-xl font-extrabold">
                {{$recipient?->name}}
            </div>
        </div>
        <div class="h-full flex flex-col px-4 overflow-y-auto " id="messages">
            <div class="border-t-[0.625px] border-line h-1 mx-2 my-4">

            </div>
            <div class="flex justify-end">
                <div class="w-fit">
                    @foreach($room->messages as $message)
                    <div
                        class="rounded-full rounded-br-md flex py-2 px-4 bg-[#43b3f6] hover:bg-twitter cursor-pointer text-sm">
                        {{$message->message}}
                    </div>
                    <div class="flex text-xs hover:underline text-gray-500 justify-end mt-2 cursor-pointer">
                        {{\Carbon\Carbon::createFromDate($message->created_at)->shortRelativeDiffForHumans()}} · Sent
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <livewire:room.chat.send-message :room="$room"/>
    @endif
</div>
