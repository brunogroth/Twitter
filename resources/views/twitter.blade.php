<x-app-layout>
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
            <livewire:show-more/>
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
                image="https://media.istockphoto.com/id/1192437350/vector/golden-egg-icon-flat.jpg?s=612x612&w=0&k=20&c=ca6wwY-hqFEgukmH8RHhEAEGg4KaYuw0TlIwWZdwxBA="
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
                image="https://media.istockphoto.com/id/1192437350/vector/golden-egg-icon-flat.jpg?s=612x612&w=0&k=20&c=ca6wwY-hqFEgukmH8RHhEAEGg4KaYuw0TlIwWZdwxBA="
                username="Marcus Aurelius" at="@aurelius_mark"
            />
            <x-cards.card-home-user
                image="https://media.istockphoto.com/id/1192437350/vector/golden-egg-icon-flat.jpg?s=612x612&w=0&k=20&c=ca6wwY-hqFEgukmH8RHhEAEGg4KaYuw0TlIwWZdwxBA="
                username="Epictetus" at="@epic_tetus"
            />
            <x-cards.card-home-user
                image="https://media.istockphoto.com/id/1192437350/vector/golden-egg-icon-flat.jpg?s=612x612&w=0&k=20&c=ca6wwY-hqFEgukmH8RHhEAEGg4KaYuw0TlIwWZdwxBA="
                username="1984 is real!" at="@Orwell_George"
            />
            <div class="pl-4 text-primary py-3
                    rounded bg-transparent hover:bg-neutral-800 w-full cursor-pointer"
            >
                Show More
            </div>
        </x-cards.card-home>
    </div>
</x-app-layout>
