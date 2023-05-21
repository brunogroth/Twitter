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
    <a href="#">
        <div class="flex items-start">
            <div>
                <img class="rounded border-gray-100"
                     width="50px" src="https://merriam-webster.com/assets/mw/images/article/art-wap-article-main/egg-3442-e1f6463624338504cd021bf23aef8441@1x.jpg">
            </div>
            <div class="ml-3">
                <span class="align-middle"> {{$name}} <span class="text-gray-500 font-thin">{{$arroba}} · {{\Carbon\Carbon::createFromDate($tweet->created_at)->shortRelativeDiffForHumans()}}</span></span>
                <p class="my-1">{{$tweet->body}}</p>
                <div id="actions" class="flex space-x-14">
                    <div class="flex items-center hover:text-heart hover:bg-opacity-10">
                        <x-icons.emoticons.comment />
                        <span class="text-gray-500 font-thin"> 0 </span>
                    </div>
                    <div class="flex items-center hover:text-heart hover:bg-opacity-10">
                        <x-icons.emoticons.retweet />
                        <span class="text-gray-500 font-thin"> 0 </span>
                    </div>
                    <div class="flex items-center hover:text-heart hover:bg-opacity-10">
                        <x-icons.emoticons.heart />
                        <span class="text-gray-500 font-thin"> 0 </span>
                    </div>
                    <div class="flex items-center hover:text-primary hover:bg-opacity-10">
                        <x-icons.emoticons.chart />
                        <span class="text-gray-500 font-thin"> 0 </span>
                    </div>
                    <div class="flex items-center hover:text-primary hover:bg-opacity-10">
                        <x-icons.emoticons.share />
                    </div>

                </div>
            </div>
        </div>


    </a>
</div>
