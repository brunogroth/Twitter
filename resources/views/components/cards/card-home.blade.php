@props(['transparent' => false])

@php
    $background = $transparent ? 'bg-black border-line border-[0.625px]' : '';
@endphp
<div class="bg-[#202327] rounded-2xl mx-3 h-fit mb-3 pb-2 {{$background}}">
    {{ $slot }}
</div>
