@props(['image',
    'username',
    'at',
    'isSelected' => false])
<div
    {{$attributes->class([
            'flex pl-3 py-3 cursor-pointer hover:bg-neutral-800',
            'border-r-blue-400 border-r-2 bg-neutral-700' => $isSelected
    ])}}
>
    <div class="w-1/6">
        <img class="rounded-full border-gray-100 w-10"
             width="50px" src="{{ $image }}">
    </div>
    <div class="ml-1 w-5/6 text-sm">
        <div class="flex">
            <p class="flex align-middle"> {{$username}} <span class="flex text-gray-500 font-thin ml-1"> {{$at}} · {{\Carbon\Carbon::now()->subHour()->shortAbsoluteDiffForHumans()}}</span></p>
        </div>
        <p class="mr-2 font-thin {{$isSelected ? 'text-white' : ' text-gray-500'}} ">{{ $slot }}</p>
    </div>
</div>
