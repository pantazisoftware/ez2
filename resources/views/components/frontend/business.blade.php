<div id="business" class="relative w-5/6 mx-auto">
            <h1 class="pt-32 pb-8 font-bold text-center uppercase text-7xl text-primary">{{ $business['title'] }}</h1>
            
            <div id="content" x-data="{ activeTab: 0 }">
                <div id="tab-menu" class="flex flex-row justify-center my-16 space-x-10">
                    @foreach ($business['types'] as $tab)
              
                    <button x-on:click="activeTab = {{ $tab['id'] }}" x-bind:class="{ 'bg-accent text-white': activeTab === {{ $tab['id'] }} }"
                        class="font-bold text-primary px-4 py-3 rounded-tl-[20px] rounded-br-[20px]">{{ $tab['title'] }}</button>
                    @endforeach
                </div>

                <div id="tab-content">
                    <div id="content-1" data-aos="fade-up" x-show.transition.in.opacity.duration.1000="activeTab === {{ $business['types']['consulting']['id'] }}">
                        <div class="grid w-full grid-cols-12 gap-10 mx-auto sm:w-5/6 md:w-4/6 lg:w-full">
                            @foreach($business['types']['consulting']['data'] as $tabContent)
                            <div id="card" class="col-span-12 lg:col-span-4 group">
                                <a href="" class="relative">
                                    <img class="h-64 w-full object-cover rounded-tl-[20px] rounded-br-[20px]"
                                        src="{{ $tabContent['image'] }}"
                                        alt="">
                                    <h1
                                        class="absolute bottom-0 right-10 left-10 px-4 rounded-tl-[20px] bg-primary/90 group-hover:bg-accent font-black text-base md:text-xl py-4 transition duration-200 ease-linear text-white">
                                        {{ $tabContent['title'] }}
                                    </h1>
                                </a>
                                <p class="py-5 text-center">{{ $tabContent['content'] }}</p>
                                <hr class="h-1 my-3 bg-gray-200">
                                <a href="{{ $tabContent['href'] }}"
                                    class="inline-flex items-center justify-center w-full space-x-2 text-sm font-bold uppercase"><span>See
                                        more</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 transition duration-200 ease-linear group-hover:text-accent group-hover:translate-x-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>

                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="content-2" data-aos="fade-up" x-show.transition.in.opacity.duration.1000="activeTab === {{ $business['types']['financial']['id']}}">
                        <div class="grid w-full grid-cols-12 gap-10 mx-auto sm:w-5/6 md:w-4/6 lg:w-full">
                            @foreach($business['types']['financial']['data'] as $tabContent)
                            <div id="card" class="col-span-12 lg:col-span-4 group">
                                <a href="" class="relative">
                                    <img class="h-64 w-full object-cover rounded-tl-[20px] rounded-br-[20px]"
                                        src="{{ $tabContent['image'] }}"
                                        alt="">
                                    <h1
                                        class="absolute bottom-0 right-10 left-10 px-4 rounded-tl-[20px] bg-primary/90 group-hover:bg-accent font-black text-base md:text-xl py-4 transition duration-200 ease-linear text-white">
                                        {{ $tabContent['title'] }}
                                    </h1>
                                </a>
                                <p class="py-5 text-center">{{ $tabContent['content'] }}</p>
                                <hr class="h-1 my-3 bg-gray-200">
                                <a href="{{ $tabContent['href'] }}"
                                    class="inline-flex items-center justify-center w-full space-x-2 text-sm font-bold uppercase"><span>See
                                        more</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 transition duration-200 ease-linear group-hover:text-accent group-hover:translate-x-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>

                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="content-3" data-aos="fade-up" x-show.transition.in.opacity.duration.1000="activeTab === {{ $business['types']['other']['id']}}">
                         <div class="grid w-full grid-cols-12 gap-10 mx-auto sm:w-5/6 md:w-4/6 lg:w-full">
                            @foreach($business['types']['other']['data'] as $tabContent)
                            <div id="card" class="col-span-12 lg:col-span-4 group">
                                <a href="" class="relative">
                                    <img class="h-64 w-full object-cover rounded-tl-[20px] rounded-br-[20px]"
                                        src="{{ $tabContent['image'] }}"
                                        alt="">
                                    <h1
                                        class="absolute bottom-0 right-10 left-10 px-4 rounded-tl-[20px] bg-primary/90 group-hover:bg-accent font-black text-base md:text-xl py-4 transition duration-200 ease-linear text-white">
                                        {{ $tabContent['title'] }}
                                    </h1>
                                </a>
                                <p class="py-5 text-center">{{ $tabContent['content'] }}</p>
                                <hr class="h-1 my-3 bg-gray-200">
                                <a href="{{ $tabContent['href'] }}"
                                    class="inline-flex items-center justify-center w-full space-x-2 text-sm font-bold uppercase"><span>See
                                        more</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 transition duration-200 ease-linear group-hover:text-accent group-hover:translate-x-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>

                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>