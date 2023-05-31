
        {{-- CENTER --}}
        <div class="col-span-1 border-x-[0.625px] border-line relative">
            <div class="sticky top-0 w-full backdrop-blur-lg">
                <div class="flex m-2">
                    <h2 class="px-4 py-2 text-xl font-semibold ">Messages</h2>
                </div>
                <div class="flex w-80 text-center mx-6 text-gray-500 mb-3">
                    <x-icons.search class="absolute mt-2 ml-4"/>
                    <input type="text"
                           class="flex bg-black w-full rounded-full font-thin text-white focus:outline-none h-10 px-10 border-line"
                           placeholder="Search Direct Messages">
                </div>
            </div>
            <div class="w-full">
                <x-messages.contact
                    image="https://merriam-webster.com/assets/mw/images/article/art-wap-article-main/egg-3442-e1f6463624338504cd021bf23aef8441@1x.jpg"
                    username="Marcus Aurelius" at="@aurelius_mark"

                />
                <x-messages.contact
                    image="https://merriam-webster.com/assets/mw/images/article/art-wap-article-main/egg-3442-e1f6463624338504cd021bf23aef8441@1x.jpg"
                    username="Marcus Aurelius" at="@aurelius_mark"

                >
                    Vem pra caixa
                </x-messages.contact>
                <x-messages.contact
                    image="https://merriam-webster.com/assets/mw/images/article/art-wap-article-main/egg-3442-e1f6463624338504cd021bf23aef8441@1x.jpg"
                    username="Marcus Aurelius" at="@aurelius_mark"
                />

            </div>
        </div>

        {{-- END CENTER --}}
        {{-- RIGHT --}}
        <div class="mt-2 w-[130%]">
            <div class="flex relative h-24 ">
        </div>
    </div>
</div>
@livewireScripts
</body>
</html>
