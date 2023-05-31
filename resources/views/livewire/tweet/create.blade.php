<div class="pb-2 border-b-[0.625px] border-line">
    <div class="flex align-top space-x-3">
        <div class="ml-3 mt-3 w-[50px] h-[50px]">
            <img class="rounded-full border-gray-100" src="https://media.istockphoto.com/id/1192437350/vector/golden-egg-icon-flat.jpg?s=612x612&w=0&k=20&c=ca6wwY-hqFEgukmH8RHhEAEGg4KaYuw0TlIwWZdwxBA=" >
        </div>
        <div class="flex w-full">
            <label class="w-full">
                <textarea
                    class="bg-transparent text-lg border-none w-full h-16 resize-none mt-3 focus:border-transparent focus:ring-0 focus:text-white"
                    wire:model="body" placeholder="What's happening?!"
                    ></textarea>
            </label>
        </div>
        @error('body')
        <div class="bg-red-500 p-4 m-4">
            <span class="text-white">{{ $message }}</span>
        </div>
        @enderror
    </div>
    <div id="actions" class="flex justify-between px-3 ml-[50px] border-t-[0.625px] border-line mr-3 pt-2">
        <div>
            <ul class="flex">
                <li><x-tweet.create.link icon="image" url="#"/></li>
                <li><x-tweet.create.link icon="gif" url="#"/></li>
                <li><x-tweet.create.link icon="poll" url="#"/></li>
                <li><x-tweet.create.link icon="emoticons.smile" url="#"/></li>
                <li><x-tweet.create.link icon="schedule" url="#"/></li>
                <li><x-tweet.create.link icon="location" url="#"/></li>
            </ul>
        </div>
        <div>
            <x-button-tweet sm class="text-base" wire:click="tweet">Tweet</x-button-tweet>
        </div>
    </div>
</div>
