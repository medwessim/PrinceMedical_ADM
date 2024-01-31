<template>
    <div class="">
        <aside
            class="border-4 border-currentColor-500/50  fixed bottom-4 end-4 z-50  items-center justify-center gap-4 rounded-lg bg-white  shadow-2xl w-96">
            <div class="relative flex items-center overflow-hidden bg-white px-4 h-20 shadow-2xl ">
                <img alt="Women"
                    src="https://images.unsplash.com/photo-1611432579699-484f7990b127?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                    class="h-12 w-12 rounded-lg object-cover" />
                <a href="/new-thing" target="_blank" rel="noreferrer" class="text-sm font-medium hover:opacity-75 pl-4">
                    name 👋
                </a>

                <button type="button"
                    class="absolute right-4 top-4 bg-sky-100 text-gray-400 hover:text-gray-500 sm:right-4 sm:top-4 md:right-6 md:top-6 lg:right-8 lg:top-6">
                    <span class="sr-only">Close</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="col-12 col-lg-7 col-xl-9 bg-slate-100 ">
                <div class="flex flex-col flex-grow w-full max-w-xl bg-white shadow-xl rounded-lg overflow-hidden ">
                    <div class="py-2 px-4 border-bottom d-none d-lg-block">
                        <div>
                            <div class="flex flex-col flex-grow  p-4 overflow-auto h-72">
                                <div class="flex w-full mt-2 space-x-3 max-w-xs">
                                    <div>
                                        <div class="bg-gray-300 p-3 rounded-r-lg rounded-bl-lg w-52">
                                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                        <span class="text-xs text-gray-500 leading-none">2 min ago</span>
                                    </div>
                                </div>
                                <div class="flex w-full mt-2 space-x-3 max-w-xs ml-auto justify-end">
                                    <div>
                                        <div class="bg-blue-600 text-white p-3 rounded-l-lg rounded-br-lg w-52">
                                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                do eiusmod.</p>
                                        </div>
                                        <span class="text-xs text-gray-500 leading-none">2 min ago</span>
                                    </div>
                                </div>
                                <div class="flex w-full mt-2 space-x-3 max-w-xs">
                                    <div>
                                        <div class="bg-gray-300 p-3 rounded-r-lg rounded-bl-lg w-52">
                                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                        <span class="text-xs text-gray-500 leading-none">2 min ago</span>
                                    </div>
                                </div>
                                <div class="flex w-full mt-2 space-x-3 max-w-xs ml-auto justify-end">
                                    <div>
                                        <div class="bg-blue-600 text-white p-3 rounded-l-lg rounded-br-lg w-52">
                                            <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                do eiusmod.</p>
                                        </div>
                                        <span class="text-xs text-gray-500 leading-none">2 min ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex-grow-0 py-3 px-4 border-top">
                    <div class="flex flex-row items-center h-16 rounded-xl bg-white w-full px-4">
                        <div>
                            <button class="flex items-center justify-center text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13">
                                    </path>
                                </svg>
                            </button>
                        </div>
                        <div class="flex-grow ml-4">
                            <div class="relative w-full">
                                <input type="text"
                                    class="flex w-full border rounded-xl focus:outline-none focus:border-indigo-300 pl-4 h-10" />
                                <button
                                    class="absolute flex items-center justify-center h-full w-12 right-0 top-0 text-gray-400 hover:text-gray-600">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="ml-4">
                            <button
                                class="flex items-center justify-center bg-indigo-500 hover:bg-indigo-600 rounded-xl text-white px-4 py-1 flex-shrink-0">
                                <span>Send</span>
                                <span class="ml-2">
                                    <svg class="w-4 h-4 transform rotate-45 -mt-px" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </aside>
    </div>
</template>