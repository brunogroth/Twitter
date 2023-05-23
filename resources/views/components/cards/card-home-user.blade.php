@props(['image',
    'username',
    'at',
    'bg_transparent' => null])
@php
    $hover = $bg_transparent ? ' hover:bg-gray-950' : ' hover:bg-neutral-800';
@endphp

<div class="flex pl-3 pt-3 cursor-pointer {{$hover}}">

    <div class="w-1/6">
        <img class="rounded-full border-gray-100"
             width="50px" src="{{ $image }}">
    </div>
    <div class="ml-3 w-5/6">
        <div class="flex justify-between">
            <span class="align-middle"> {{$username}} <p class="text-gray-500 font-thin">{{$at}}</p></span>
            <x-button-follow>Follow</x-button-follow>
        </div>
        <p class="my-1 mr-5 font-thin font-light">{{ $slot }}</p>
    </div>
</div>
