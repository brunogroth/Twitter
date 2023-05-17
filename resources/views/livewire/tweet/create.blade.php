<div>
    <div>
        <div class="flex ">
            <img class="rounded-full border-gray-100" width="50px" height="50px" src="https://merriam-webster.com/assets/mw/images/article/art-wap-article-main/egg-3442-e1f6463624338504cd021bf23aef8441@1x.jpg">
        </div>
        <div class="flex w-full">
        <label class="w-full">
            <textarea class="bg-transparent border-none w-full h-16 resize-none" wire:model="body" placeholder="What's up doc?"></textarea>
        </label>
        </div>
        @error('body')
        <div class="bg-red-500 p-4 m-4">
            <span class="text-white">{{ $message }}</span>
        </div>
        @enderror
    </div>
    <x-button-tweet sm class="text-base" wire:click="tweet">Tweet</x-button-tweet>
</div>
