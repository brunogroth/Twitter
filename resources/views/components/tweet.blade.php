@php use Illuminate\Support\Str; @endphp

@props([
    'tweet'
])
@php
    $name = \App\Models\User::select('name')->where('id', $tweet->created_by)->first()->name;
    $arroba = '@' . Str::of($name)->slug('_');
@endphp
<div class="pt-3 pl-5 pr-10 pb-3 shadow-2xl
        border-line border-b-[0.625px]
        rounded bg-transparent hover:bg-gray-950 cursor-pointer">
    <div class="flex items-start">
        <div class="w-1/12">
            <img class="rounded-full border-gray-100"
                 width="50px"
                 src="https://media.istockphoto.com/id/1192437350/vector/golden-egg-icon-flat.jpg?s=612x612&w=0&k=20&c=ca6wwY-hqFEgukmH8RHhEAEGg4KaYuw0TlIwWZdwxBA=">
        </div>
        <div class="ml-3 w-11/12">
            <span class="align-middle"> {{$name}} <span
                    class="text-gray-500 font-thin group-hover">{{$arroba}} · {{\Carbon\Carbon::createFromDate($tweet->created_at)->shortRelativeDiffForHumans()}}</span></span>
            <p class="my-1">{{$tweet->body}}</p>
            <div id="actions" class="flex space-x-14">
                <div class="flex items-center group hover:text-primary hover:bg-opacity-10">
                    <x-icons.emoticons.comment/>
                    <span class="text-gray-500 font-thin group-hover:text-primary"> 0 </span>
                </div>
                <div class="flex items-center group hover:text-retweet hover:bg-opacity-10">
                    <x-icons.emoticons.retweet/>
                    <span class="text-gray-500 font-thin group-hover:text-retweet"> 0 </span>
                </div>
                <div class="flex items-center group hover:bg-opacity-10">
                    <x-icons.emoticons.heart/>
                    <span class="text-gray-500 font-thin group-hover group-hover:text-heart"> 0 </span>
                </div>
                <div class="flex items-center group hover:text-primary hover:bg-opacity-10">
                    <x-icons.emoticons.chart/>
                    <span class="text-gray-500 font-thin group-hover:text-primary"> 0 </span>
                </div>
                <div class="flex items-center group hover:text-primary hover:bg-opacity-10">
                    <x-icons.emoticons.share/>
                </div>
            </div>
        </div>
    </div>
</div>
