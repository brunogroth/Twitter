@props([
    'sm' => null
])

@php
    $size = 'px-4 py-3 text-xl w-4/6 mt-4';

    if($sm){
        $size = 'py-1 px-5 w-fit text-lg';
    }
@endphp
<button
    {{$attributes->class(["bg-primary rounded-full font-extrabold $size"])}}>
    {{ $slot }}
</button>
