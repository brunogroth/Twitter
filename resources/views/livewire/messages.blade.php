<div class="flex">
    {{-- CENTER --}}
    <div class="col-span-1 border-x-[0.625px] border-line relative">
        <livewire:messages.search-and-list />
    </div>
    {{-- END CENTER --}}
    {{-- RIGHT --}}
    <div class="
                border-x-[0.625px] border-lines relative h-full
                min-w-[580px] flex justify-between flex-col
            ">
        <div class="flex align-center space-x-2 px-4 py-2 h-auto">
            <div>
                <img alt="User" draggable="true" class="rounded-full w-10"
                     src="https://media.istockphoto.com/id/1192437350/vector/golden-egg-icon-flat.jpg?s=612x612&w=0&k=20&c=ca6wwY-hqFEgukmH8RHhEAEGg4KaYuw0TlIwWZdwxBA="
                />
            </div>

            <div class="flex items-center text-xl font-extrabold">
                Bruno Miguel Groth
            </div>

        </div>

        <div class="h-full flex flex-col px-4 overflow-y-auto " id="messages">
            <div class="border-t-[0.625px] border-line h-1 mx-2 my-4">

            </div>
            <div class="flex justify-end">
                <div class="w-fit">
                    <div
                        class="rounded-full rounded-br-md flex py-2 px-4 bg-[#43b3f6] hover:bg-twitter cursor-pointer text-sm">
                        Mensagem
                    </div>

                    <div class="flex text-xs hover:underline text-gray-500 justify-end mt-2 cursor-pointer">
                        12:14 AM · Sent
                    </div>
                </div>
            </div>
        </div>


        <div class="border-line border-y-[0.625px] bottom-0 py-2 px-4">
            <div class="
                    flex items-center space-x-1 px-1
                    rounded-2xl bg-gray-600 bg-opacity-40 w-full h-10
                ">
                <button class="flex fill-primary hover:bg-primary hover:bg-opacity-10 p-1 rounded-full">
                    <x-icons.image />
                </button>
                <button class="flex fill-primary hover:bg-primary hover:bg-opacity-10 p-1 rounded-full">
                    <x-icons.gif />
                </button>
                <button class="flex fill-primary hover:bg-primary hover:bg-opacity-10 p-1 rounded-full">
                    <x-icons.emoticons.smile />
                </button>
                <input type="text" placeholder="Start a new message"
                       class="w-full bg-transparent focus:outline-none hover:outline-none border-0 outline-none focus:ring-0">
                <button class="flex fill-primary hover:bg-primary hover:bg-opacity-10 p-1 rounded-full">
                    <x-icons.messages.send />
                </button>
            </div>
        </div>
    </div>
</div>
