@props([
    'sm' => null
])

@php
    $size = 'px-4 py-3 text-xl w-4/6 mt-6';

    if($sm){
        $size = 'py-1 px-5 w-fit';
    }
@endphp
<button
    {{$attributes->class(["bg-primary rounded-full font-extrabold $size"])}}>
    {{ $slot }}
</button>
