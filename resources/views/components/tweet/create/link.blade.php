@props([
    'url',
    'icon'
])
<a href="{{$url}}" class="flex fill-primary hover:bg-primary hover:bg-opacity-10 h-[37px] p-2 rounded-full"><x-dynamic-component :component="'icons.'. $icon" /></a>
