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
        <div class="col-span-2 border-x-[0.625px] border-[#2f3336]">
            <div class="flex m-2">
                <h2 class="px-4 py-2 text-xl font-semibold ">Home</h2>
            </div>
            <ul class="flex w-full grid grid-cols-2 text-center text-lg font-bold text-gray-500 border-b-[0.625px] border-[#2f3336]">
                <li class="pt-4 cursor-pointer hover:bg-neutral-900 flex justify-center">
                    <div class="border-b-4 pb-3 border-primary">For you</div>
                </li>
                <li class="pt-4 cursor-pointer hover:bg-neutral-900 flex justify-center">
                    <div class="border-b-4 pb-3 border-primary">Following</div>
                </li>
            </ul>
            <div class="w-full">
                <livewire:tweet.create />
                <livewire:timeline />
            </div>
        </div>

        {{-- END CENTER --}}
        {{-- RIGHT --}}
        <div class="">
            Bruno
        </div>
    </div>
</div>
@livewireScripts
</body>
</html>
