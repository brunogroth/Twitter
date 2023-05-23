<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Twitter') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans antialiased bg-gray-100 text-white">
<div class="min-h-screen dark:bg-black">
    <div class="container mx-auto grid grid-cols-4 min-h-screen">
        {{-- MENU --}}
        <div class="pt-[1px] text=[#d6d9db] space-y-1">
            <div>
                <x-menu.item route="/home" icon="logo"/>
                <x-menu.item title="Home" route="/home" icon="home"/>
                <x-menu.item title="Explore" route="/explore" icon="hashtag"/>
                <x-menu.item title="Notifications" route="/notifications" icon="bell"/>
                <x-menu.item title="Messages" route="/messages" icon="envelope"/>
                <x-menu.item title="Lists" route="/lists" icon="list"/>
                <x-menu.item title="Bookmarks" route="/bookmarks" icon="bookmark"/>
                <x-menu.item title="Twitter Blue" route="/twitter-blue" icon="twitter-blue"/>
                <x-menu.item title="Profile" route="/profile" icon="profile"/>
                <x-menu.item title="More" route="#" icon="More"/>
                <div>
                    <x-button-tweet> Tweet</x-button-tweet>
                </div>
            </div>
        </div>
        {{-- END MENU --}}

        {{-- CENTER --}}
        <div class="col-span-2 border-x-[0.625px] border-line relative">
            <div class="sticky top-0 w-full backdrop-blur-lg">
                <div class="flex m-2">
                    <h2 class="px-4 py-2 text-xl font-semibold ">Home</h2>
                </div>
                <ul class="flex w-full grid grid-cols-2 text-center text-lg font-bold text-gray-500 border-b-[0.625px] border-line">
                    <li class="pt-4 cursor-pointer hover:bg-neutral-900 flex justify-center">
                        <div class="border-b-4 pb-3 border-primary">For you</div>
                    </li>
                    <li class="pt-4 cursor-pointer hover:bg-neutral-900 flex justify-center">
                        <div class="border-b-4 pb-3 border-primary">Following</div>
                    </li>
                </ul>
            </div>
            <div class="w-full">
                <livewire:tweet.create/>
                <div class="text-center text-primary py-3 border-line border-b-[0.625px]
                    rounded bg-transparent hover:bg-gray-950 w-full cursor-pointer"
                >
                    Show 205 Tweets
                </div>
                <livewire:timeline/>
            </div>
        </div>

        {{-- END CENTER --}}
        {{-- RIGHT --}}
        <div class="mt-2">
            <div class="flex relative h-12">
                <x-icons.search class="absolute mt-2 ml-4"/>
                <input type="text"
                       class="flex bg-[#202327] w-full mx-2 rounded-full focus:outline-none h-10 px-10 border-none"
                       placeholder="Search Twitter">
            </div>
            <x-cards.card-home transparent>
                <h1 class="font-extrabold text-2xl pt-2 pl-4">Relevant people</h1>
                {{-- TODO FOREACH USER --}}
                <x-cards.card-home-user
                    image="https://merriam-webster.com/assets/mw/images/article/art-wap-article-main/egg-3442-e1f6463624338504cd021bf23aef8441@1x.jpg"
                    username="Epictetus" at="@epic_tetus"
                    bg_transparent
                >
                    First say to yourself what you would be; and then do what you have to do.
                </x-cards.card-home-user>
            </x-cards.card-home>
            <x-cards.card-home>
                <h1 class="font-extrabold text-2xl pt-2 pl-4">What's happening</h1>
                <x-cards.card-home-item
                    title="Ubisoft" topic="Gaming" count="2.4k"
                />
                <x-cards.card-home-item
                    title="Nuggets at Lakers" topic="Sports" count="5.1k"
                    image="https://pbs.twimg.com/semantic_core_img/1338903573682274304/kSZqEuMh?format=jpg&name=240x240"
                />
                <x-cards.card-home-item
                    title="Insane Bruno's Twitter clone" topic="Programming" count="538.4k"
                />
                <div class="pl-4 text-primary py-3
                    rounded bg-transparent hover:bg-neutral-800 w-full cursor-pointer"
                >
                    Show More
                </div>
            </x-cards.card-home>
            <x-cards.card-home>
                <h1 class="font-extrabold text-2xl pt-2 pl-4">Who to follow</h1>
                {{-- TODO FOREACH USER --}}
                <x-cards.card-home-user
                    image="https://merriam-webster.com/assets/mw/images/article/art-wap-article-main/egg-3442-e1f6463624338504cd021bf23aef8441@1x.jpg"
                    username="Marcus Aurelius" at="@aurelius_mark"
                />
                <x-cards.card-home-user
                    image="https://merriam-webster.com/assets/mw/images/article/art-wap-article-main/egg-3442-e1f6463624338504cd021bf23aef8441@1x.jpg"
                    username="Epictetus" at="@epic_tetus"
                />
                <x-cards.card-home-user
                    image="https://merriam-webster.com/assets/mw/images/article/art-wap-article-main/egg-3442-e1f6463624338504cd021bf23aef8441@1x.jpg"
                    username="1984 is real!" at="@Orwell_George"
                />
                <div class="pl-4 text-primary py-3
                    rounded bg-transparent hover:bg-neutral-800 w-full cursor-pointer"
                >
                    Show More
                </div>
            </x-cards.card-home>

        </div>
    </div>
</div>
@livewireScripts
</body>
</html>
