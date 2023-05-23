@props(['title', 'topic', 'count' => null, 'image' => null])

<div class="flex pl-3 pt-3 cursor-pointer hover:bg-neutral-800 pb-2 rounded-lg">
    <div class="flex mx-3 w-full justify-between">
        <div class="">
            <small class="block text-gray-500 font-thin">{{$topic}} · {{\Carbon\Carbon::now()->subHours(2)->diffForHumans()}}</small>
            <span class="align-middle font-extrabold"> {{$title}}</span>
            @if($count)
                <small class="block text-gray-500 font-thin">{{$count}} Tweets</small>
            @endif
        </div>
        @if($image)
            <div class="w-2/5" >
                <img class="rounded-xl border-gray-100"
                     src="{{ $image }}">
            </div>
        @else
            <x-icons.ellipsis/>

        @endif

    </div>
</div>
