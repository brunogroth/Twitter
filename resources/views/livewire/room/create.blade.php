<div>
    <a href="#" class="flex items-end text-sm space-x-1 group" wire:click="$set('modal', true)">
        <x-icons.messages.new-message/>
    </a>
</div>

@if($modal)
    <div>
        <p>modal</p>
    </div>
@endif
