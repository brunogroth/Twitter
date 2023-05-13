<div>
    <div>
        <label>
            <textarea wire:model="body" placeholder="What's up doc?"></textarea>
        </label>
        @error('body')
        <div class="bg-red-500 p-4 m-4">
            <span class="text-white">{{ $message }}</span>
        </div>
        @enderror
    </div>
    <x-primary-button wire:click="tweet">Tweet</x-primary-button>
</div>
