@extends('frontend.layouts.app')

@section('title', __('Services with Tabs'))

@section('content')
    <div class="px-2 w-full md:px-0  md:w-5/6 lg:w-4/6 mx-auto text-body">
        <div id="thumbnail" class="my-10">
            <img class="mx-auto object-cover h-[570px] w-full object-left"
                src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                alt="">
        </div>

        <div id="content" x-data="{ activeTab: 0 }">

            <div id="tab-menu" class="flex flex-row justify-center space-x-10 my-16">
                <button x-on:click="activeTab = 0" x-bind:class="{ 'bg-accent text-white': activeTab === 0 }"
                    class="font-bold px-4 py-3 rounded-tl-[20px] rounded-br-[20px]">Consulting</button>
                <button x-on:click="activeTab = 1" x-bind:class="{ 'bg-accent text-white': activeTab === 1 }"
                    class="font-bold px-4 py-3 rounded-tl-[20px] rounded-br-[20px]">Financial</button>
                <button x-on:click="activeTab = 2" x-bind:class="{ 'bg-accent text-white': activeTab === 2 }"
                    class="font-bold px-4 py-3 rounded-tl-[20px] rounded-br-[20px]">Other Solution</button>
            </div>

            <div id="tab-content">
                <div id="content-1" :class="{ 'active': activeTab === 0 }"
                    x-show.transition.in.opacity.duration.1000="activeTab === 0">
                    <div class="w-full sm:w-5/6 md:w-4/6 mx-auto lg:w-full grid grid-cols-12 gap-10">
                        <div id="card" class="col-span-12 lg:col-span-4 group">
                            <a href="" class="relative">
                                <img class="h-64 w-full object-cover rounded-tl-[20px] rounded-br-[20px]"
                                    src="https://images.unsplash.com/photo-1622463461333-611830d028bd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                                    alt="">
                                <h1
                                    class="absolute bottom-0 right-10 left-10 px-4 rounded-tl-[20px] bg-primary/90 group-hover:bg-accent font-black text-base md:text-xl py-4 transition duration-200 ease-linear text-white">
                                    Business Unit
                                    Strategy
                                </h1>
                            </a>
                            <p class="text-center py-5">The effort vastly improved the company’s planning and execution
                                functions, they knew that in
                                order to succeed in this era of technology their accounting systems needed.</p>
                            <hr class="bg-gray-200 h-1 my-3">
                            <a href=""
                                class="w-full uppercase inline-flex space-x-2 items-center justify-center text-sm font-bold"><span>See
                                    more</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6 group-hover:text-accent transition duration-200 ease-linear group-hover:translate-x-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>

                            </a>
                        </div>
                        <div id="card" class="col-span-12 lg:col-span-4 group">
                            <a href="" class="relative">
                                <img class="h-64 w-full object-cover rounded-tl-[20px] rounded-br-[20px]"
                                    src="https://plus.unsplash.com/premium_photo-1683141437785-dd83524bd24d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                                    alt="">
                                <h1
                                    class="absolute bottom-0 right-10 left-10 px-4 rounded-tl-[20px] bg-primary/90 group-hover:bg-accent font-black text-base md:text-xl py-4 transition duration-200 ease-linear text-white">
                                    Technical Details
                                </h1>
                            </a>
                            <p class="text-center py-5">The effort vastly improved the company’s planning and execution
                                functions, they knew that in
                                order to succeed in this era of technology their accounting systems needed.</p>
                            <hr class="bg-gray-200 h-1 my-3">
                            <a href=""
                                class="w-full uppercase inline-flex space-x-2 items-center justify-center text-sm font-bold"><span>See
                                    more</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6 group-hover:text-accent transition duration-200 ease-linear group-hover:translate-x-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>

                            </a>
                        </div>
                        <div id="card" class="col-span-12 lg:col-span-4 group">
                            <a href="" class="relative">
                                <img class="h-64 w-full object-cover rounded-tl-[20px] rounded-br-[20px]"
                                    src="https://images.unsplash.com/photo-1579621970795-87facc2f976d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                                    alt="">
                                <h1
                                    class="absolute bottom-0 right-10 left-10 px-4 rounded-tl-[20px] bg-primary/90 group-hover:bg-accent font-black text-base md:text-xl py-4 transition duration-200 ease-linear text-white">
                                    Finance
                                </h1>
                            </a>
                            <p class="text-center py-5">The effort vastly improved the company’s planning and execution
                                functions, they knew that in
                                order to succeed in this era of technology their accounting systems needed.</p>
                            <hr class="bg-gray-200 h-1 my-3">
                            <a href=""
                                class="w-full uppercase inline-flex space-x-2 items-center justify-center text-sm font-bold"><span>See
                                    more</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6 group-hover:text-accent transition duration-200 ease-linear group-hover:translate-x-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>

                            </a>
                        </div>
                    </div>
                </div>
                <div id="content-2" :class="{ 'active': activeTab === 1 }"
                    x-show.transition.in.opacity.duration.1000="activeTab === 1">
                    <div class="w-full sm:w-5/6 md:w-4/6 mx-auto lg:w-full grid grid-cols-12 gap-10">
                        <div id="card" class="col-span-12 lg:col-span-4 group">
                            <a href="" class="relative">
                                <img class="h-64 w-full object-cover rounded-tl-[20px] rounded-br-[20px]"
                                    src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                                    alt="">
                                <h1
                                    class="absolute bottom-0 right-10 left-10 px-4 rounded-tl-[20px] bg-primary/90 group-hover:bg-accent font-black text-base md:text-xl py-4 transition duration-200 ease-linear text-white">
                                    Management
                                </h1>
                            </a>
                            <p class="text-center py-5">The effort vastly improved the company’s planning and execution
                                functions, they knew that in
                                order to succeed in this era of technology their accounting systems needed.</p>
                            <hr class="bg-gray-200 h-1 my-3">
                            <a href=""
                                class="w-full uppercase inline-flex space-x-2 items-center justify-center text-sm font-bold"><span>See
                                    more</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6 group-hover:text-accent transition duration-200 ease-linear group-hover:translate-x-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>

                            </a>
                        </div>
                        <div id="card" class="col-span-12 lg:col-span-4 group">
                            <a href="" class="relative">
                                <img class="h-64 w-full object-cover rounded-tl-[20px] rounded-br-[20px]"
                                    src="https://images.unsplash.com/photo-1551135049-8a33b5883817?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                                    alt="">
                                <h1
                                    class="absolute bottom-0 right-10 left-10 px-4 rounded-tl-[20px] bg-primary/90 group-hover:bg-accent font-black text-base md:text-xl py-4 transition duration-200 ease-linear text-white">
                                    Logic
                                </h1>
                            </a>
                            <p class="text-center py-5">The effort vastly improved the company’s planning and execution
                                functions, they knew that in
                                order to succeed in this era of technology their accounting systems needed.</p>
                            <hr class="bg-gray-200 h-1 my-3">
                            <a href=""
                                class="w-full uppercase inline-flex space-x-2 items-center justify-center text-sm font-bold"><span>See
                                    more</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6 group-hover:text-accent transition duration-200 ease-linear group-hover:translate-x-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>

                            </a>
                        </div>
                        <div id="card" class="col-span-12 lg:col-span-4 group">
                            <a href="" class="relative">
                                <img class="h-64 w-full object-cover rounded-tl-[20px] rounded-br-[20px]"
                                    src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2342&q=80"
                                    alt="">
                                <h1
                                    class="absolute bottom-0 right-10 left-10 px-4 rounded-tl-[20px] bg-primary/90 group-hover:bg-accent font-black text-base md:text-xl py-4 transition duration-200 ease-linear text-white">
                                    Advisory
                                </h1>
                            </a>
                            <p class="text-center py-5">The effort vastly improved the company’s planning and execution
                                functions, they knew that in
                                order to succeed in this era of technology their accounting systems needed.</p>
                            <hr class="bg-gray-200 h-1 my-3">
                            <a href=""
                                class="w-full uppercase inline-flex space-x-2 items-center justify-center text-sm font-bold"><span>See
                                    more</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6 group-hover:text-accent transition duration-200 ease-linear group-hover:translate-x-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>

                            </a>
                        </div>
                    </div>
                </div>
                <div id="content-3" :class="{ 'active': activeTab === 2 }"
                    x-show.transition.in.opacity.duration.1000="activeTab === 2">
                    <div class="w-full sm:w-5/6 md:w-4/6 mx-auto lg:w-full grid grid-cols-12 gap-10">
                        <div id="card" class="col-span-12 lg:col-span-4 group">
                            <a href="" class="relative">
                                <img class="h-64 w-full object-cover rounded-tl-[20px] rounded-br-[20px]"
                                    src="https://images.unsplash.com/photo-1600880292089-90a7e086ee0c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=987&q=80"
                                    alt="">
                                <h1
                                    class="absolute bottom-0 right-10 left-10 px-4 rounded-tl-[20px] bg-primary/90 group-hover:bg-accent font-black text-base md:text-xl py-4 transition duration-200 ease-linear text-white">
                                    Unity
                                </h1>
                            </a>
                            <p class="text-center py-5">The effort vastly improved the company’s planning and execution
                                functions, they knew that in
                                order to succeed in this era of technology their accounting systems needed.</p>
                            <hr class="bg-gray-200 h-1 my-3">
                            <a href=""
                                class="w-full uppercase inline-flex space-x-2 items-center justify-center text-sm font-bold"><span>See
                                    more</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6 group-hover:text-accent transition duration-200 ease-linear group-hover:translate-x-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>

                            </a>
                        </div>
                        <div id="card" class="col-span-12 lg:col-span-4 group">
                            <a href="" class="relative">
                                <img class="h-64 w-full object-cover rounded-tl-[20px] rounded-br-[20px]"
                                    src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                                    alt="">
                                <h1
                                    class="absolute bottom-0 right-10 left-10 px-4 rounded-tl-[20px] bg-primary/90 group-hover:bg-accent font-black text-base md:text-xl py-4 transition duration-200 ease-linear text-white">
                                    Learn
                                </h1>
                            </a>
                            <p class="text-center py-5">The effort vastly improved the company’s planning and execution
                                functions, they knew that in
                                order to succeed in this era of technology their accounting systems needed.</p>
                            <hr class="bg-gray-200 h-1 my-3">
                            <a href=""
                                class="w-full uppercase inline-flex space-x-2 items-center justify-center text-sm font-bold"><span>See
                                    more</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6 group-hover:text-accent transition duration-200 ease-linear group-hover:translate-x-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>

                            </a>
                        </div>
                        <div id="card" class="col-span-12 lg:col-span-4 group">
                            <a href="" class="relative">
                                <img class="h-64 w-full object-cover rounded-tl-[20px] rounded-br-[20px]"
                                    src="https://images.unsplash.com/photo-1597733336794-12d05021d510?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80"
                                    alt="">
                                <h1
                                    class="absolute bottom-0 right-10 left-10 px-4 rounded-tl-[20px] bg-primary/90 group-hover:bg-accent font-black text-base md:text-xl py-4 transition duration-200 ease-linear text-white">
                                    Internet
                                </h1>
                            </a>
                            <p class="text-center py-5">The effort vastly improved the company’s planning and execution
                                functions, they knew that in
                                order to succeed in this era of technology their accounting systems needed.</p>
                            <hr class="bg-gray-200 h-1 my-3">
                            <a href=""
                                class="w-full uppercase inline-flex space-x-2 items-center justify-center text-sm font-bold"><span>See
                                    more</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6 group-hover:text-accent transition duration-200 ease-linear group-hover:translate-x-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>

                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>
@endsection
