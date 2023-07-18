@extends('frontend.layouts.app')

@section('title', __('Homepage'))

@section('content')
    <div class="p-2 lg:px-16">
        <div id="jumbo" x-data="{ jumbo: 1 }">
            <div id="jumbotron"
                class="w-full min-h-[400px] lg:h-[800px] relative rounded-bl-[50px] rounded-tr-[50px] overflow-hidden">


                @foreach (config('homepage.hero') as $hero)
                    <div id="jumbotron-content" id="{{ $hero['id'] }}"
                        x-show.transition.in.opacity.duration.1000="jumbo === {{ $hero['id'] }}">
                        <img class="absolute top-0 bottom-0 object-cover w-full h-full origin-center lg:object-cover"
                            src="{{ $hero['image'] }}" alt="">

                        <div class="absolute top-0 bottom-0 justify-center z-10 w-full p-10 tracking-tight lg:p-40 bg-{{ $hero['color'] }}/60">
                            <div id="animate" data-aos="fade-right" data-aos-delay="50" data-aos-duration="600"
                                data-aos-easing="ease-in-out">
                                <h1 class="w-full text-6xl font-bold text-white uppercase drop-shadow-lg md:w-5/6 lg:w-4/6 lg:text-8xl" data-aos="fade-right" data-aos-delay="50">
                                    {{ $hero['title'] }}
                                </h1>
                                <a href="{{ $hero['href'] }}"
                                    class="inline-flex items-center px-12 py-4 my-10 space-x-2 text-sm font-bold text-white uppercase transition duration-300 ease-linear rounded-lg hover:bg-primary hover:-translate-y-3 bg-accent">Submit</a>
                            </div>

                        </div>
                    </div>
                @endforeach


            </div>
            <div id="jumbotron-controls"
                class="grid grid-cols-12 gap-10 px-10 py-16">
                @foreach (config('homepage.hero') as $hero)
                    <div id="item1" data-aos="fade-up" x-on:click="jumbo = {{ $hero['id'] }}"
                        x-bind:class="{ 'border-gray-200': jumbo ===  {{ $hero['id'] }}}"
                        class="col-span-12 md:col-span-6 lg:col-span-3 flex hover:border-gray-200 transition duration-200 flex-row hover:cursor-pointer items-center p-6 space-x-6 border-4 border-transparent  rounded-bl-[50px] rounded-tr-[50px]">
                        <div>
                            <p class="text-5xl font-bold text-accent">{{ $hero['id'] }}</p>
                        </div>
                        <div>
                            <p class="text-xl font-bold text-balance text-primary">{{ $hero['title'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div id="industries" class="bg-accent rounded-bl-[50px] rounded-tr-[50px] relative">

            <h1 class="pt-16 pb-8 text-5xl font-bold text-center uppercase lg:text-7xl text-primary">{{ config('homepage.industries.title') }}</h1>
            <p class="w-5/6 mx-auto text-center text-white text-balance lg:w-3/6">{{ config('homepage.industries.short') }}</p>
            <div class="grid grid-cols-12 px-20 py-20 divide-y lg:py-32 md:divide-y-0 lg:divide-x divide-white/60">
                @foreach (config('homepage.industries.data') as $industry)
                <div data-aos="fade-up" class="col-span-12 p-6 md:col-span-6 lg:col-span-3" data-aos="fade-up" data-aos-duration="700">
                    <p>
                       {{ htmlentities($industry['icon']) }}

                    </p>
                    <h3 class="pt-5 text-2xl font-bold text-primary">{{ $industry['title']}}</h3>
                    <p class="py-5 text-white text-blance">{{ $industry['content'] }}</p>
                </div>
                @endforeach
              
            </div>
        </div>

        <div id="business" class="relative w-5/6 mx-auto">
            <h1 class="pt-32 pb-8 font-bold text-center uppercase text-7xl text-primary">{{ config('homepage.services.title') }}</h1>
            
            <div id="content" x-data="{ activeTab: 0 }">

                <div id="tab-menu" class="flex flex-row justify-center my-16 space-x-10">
                    @foreach (config('homepage.services.types') as $tab)
              
                    <button x-on:click="activeTab = {{ $tab['id'] }}" x-bind:class="{ 'bg-accent text-white': activeTab === {{ $tab['id'] }} }"
                        class="font-bold text-primary px-4 py-3 rounded-tl-[20px] rounded-br-[20px]">{{ $tab['title'] }}</button>
                    @endforeach
                </div>

                <div id="tab-content">
                    <div id="content-1" data-aos="fade-up" x-show.transition.in.opacity.duration.1000="activeTab === {{ config('homepage.services.types.consulting.id') }}">
                        <div class="grid w-full grid-cols-12 gap-10 mx-auto sm:w-5/6 md:w-4/6 lg:w-full">
                            @foreach(config('homepage.services.types.consulting.data') as $tabContent)
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
                    <div id="content-2" data-aos="fade-up" x-show.transition.in.opacity.duration.1000="activeTab === {{ config('homepage.services.types.financial.id')}}">
                        <div class="grid w-full grid-cols-12 gap-10 mx-auto sm:w-5/6 md:w-4/6 lg:w-full">
                            @foreach(config('homepage.services.types.financial.data') as $tabContent)
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
                    <div id="content-3" data-aos="fade-up" x-show.transition.in.opacity.duration.1000="activeTab === {{ config('homepage.services.types.other.id')}}">
                         <div class="grid w-full grid-cols-12 gap-10 mx-auto sm:w-5/6 md:w-4/6 lg:w-full">
                            @foreach(config('homepage.services.types.other.data') as $tabContent)
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

        <div id="successful" class="relative rounded-tl-[50px] rounded-br-[50px] bg-primary overflow-hidden my-32">
            <img class="absolute top-0 left-0 right-0 z-0 object-cover opacity-20"
                src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                alt="">
            <h1 class="relative z-20 w-6/12 py-10 mx-auto text-3xl font-bold text-center text-white lg:text-5xl ">Doing the
                <span class="italic highlight text-accent">successful thing,</span><br />
                at the right time.
            </h1>

            <div id="scrollable" class="relative z-20 px-6 pb-16 my-16 overflow-x-scroll">

                <div class="z-20 flex overflow-x-auto">
                    <div class="flex flex-none w-full space-x-6 snap-x snap-mandatory">
                        <div class="flex-none w-3/4 md:w-2/4 lg:w-1/4 snap-always snap-start">
                            <p class="font-medium text-white">When you are in the financial industry you know the image you
                                have to project
                                to people. You have
                                to be agile and authoritative;</p>
                            <div class="flex items-center space-x-2">
                                <div id="image" class="items-center flex-grow-0 w-16">
                                    <img class="object-cover w-12 h-12 rounded-bl-xl rounded-tr-xl"
                                        src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                                        alt="">
                                </div>
                                <div id="details" class="py-4">
                                    <p class="text-lg font-bold text-accent">Donald Greg</p>
                                    <p class="text-white">CEO MatterMost</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex-none w-3/4 md:w-2/4 lg:w-1/4 snap-always snap-start">
                            <p class="font-medium text-white">When you are in the financial industry you know the image you
                                have to project
                                to people. You have
                                to be agile and authoritative;</p>
                            <div class="flex items-center space-x-2">
                                <div id="image" class="items-center flex-grow-0 w-16">
                                    <img class="object-cover w-12 h-12 rounded-bl-xl rounded-tr-xl"
                                        src="https://images.unsplash.com/photo-1499952127939-9bbf5af6c51c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2352&q=80"
                                        alt="">
                                </div>
                                <div id="details" class="py-4">
                                    <p class="text-lg font-bold text-accent">Martha Mace</p>
                                    <p class="text-white">Sales Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex-none w-3/4 md:w-2/4 lg:w-1/4 snap-always snap-start">
                            <p class="font-medium text-white">When you are in the financial industry you know the image you
                                have to project
                                to people. You have
                                to be agile and authoritative;</p>
                            <div class="flex items-center space-x-2">
                                <div id="image" class="items-center flex-grow-0 w-16">
                                    <img class="object-cover w-12 h-12 rounded-bl-xl rounded-tr-xl"
                                        src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=988&q=80"
                                        alt="">
                                </div>
                                <div id="details" class="py-4">
                                    <p class="text-lg font-bold text-accent">Gabriele Manique</p>
                                    <p class="text-white">CTO EquipTrelo</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex-none w-3/4 md:w-2/4 lg:w-1/4 snap-always snap-start">
                            <p class="font-medium text-white">When you are in the financial industry you know the image you
                                have to project
                                to people. You have
                                to be agile and authoritative;</p>
                            <div class="flex items-center space-x-2">
                                <div id="image" class="items-center flex-grow-0 w-16">
                                    <img class="object-cover w-12 h-12 rounded-bl-xl rounded-tr-xl"
                                        src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                                        alt="">
                                </div>
                                <div id="details" class="py-4">
                                    <p class="text-lg font-bold text-accent">Donald Greg</p>
                                    <p class="text-white">CEO MatterMost</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex-none w-3/4 md:w-2/4 lg:w-1/4 snap-always snap-start">
                            <p class="font-medium text-white">When you are in the financial industry you know the image you
                                have to project
                                to people. You have
                                to be agile and authoritative;</p>
                            <div class="flex items-center space-x-2">
                                <div id="image" class="items-center flex-grow-0 w-16">
                                    <img class="object-cover w-12 h-12 rounded-bl-xl rounded-tr-xl"
                                        src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                                        alt="">
                                </div>
                                <div id="details" class="py-4">
                                    <p class="text-lg font-bold text-accent">Donald Greg</p>
                                    <p class="text-white">CEO MatterMost</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex-none w-3/4 md:w-2/4 lg:w-1/4 snap-always snap-start">
                            <p class="font-medium text-white">When you are in the financial industry you know the image you
                                have to project
                                to people. You have
                                to be agile and authoritative;</p>
                            <div class="flex items-center space-x-2">
                                <div id="image" class="items-center flex-grow-0 w-16">
                                    <img class="object-cover w-12 h-12 rounded-bl-xl rounded-tr-xl"
                                        src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                                        alt="">
                                </div>
                                <div id="details" class="py-4">
                                    <p class="text-lg font-bold text-accent">Donald Greg</p>
                                    <p class="text-white">CEO MatterMost</p>
                                </div>
                            </div>
                        </div>
                        <!-- Add more columns as needed -->
                    </div>
                </div>


            </div>
        </div>

        <div id="features" class="w-10/12 mx-auto">
            <div class="flex flex-col space-x-10 lg:flex-row" x-data="{ features: 0 }">
                <div class="w-full lg:w-4/12">
                    <div id="tab-controls" class="flex flex-row items-center justify-center pb-10 space-x-1 text-primary">
                        <button x-on:click="features = 0" x-bind:class="{ 'bg-accent text-white': features === 0 }"
                            class="px-4 py-2.5 rounded-tl-xl rounded-br-xl font-bold">Research</button>
                        <button x-on:click="features = 1" x-bind:class="{ 'bg-accent text-white': features === 1 }"
                            class="px-4 py-2.5 rounded-tl-xl rounded-br-xl font-bold">Concept</button>
                        <button x-on:click="features = 2" x-bind:class="{ 'bg-accent text-white': features === 2 }"
                            class="px-4 py-2.5 rounded-tl-xl rounded-br-xl font-bold">Solution</button>
                    </div>
                    <div id="c-title1" x-show.transition.in.opacity.duration.1000="features === 0" id="title"
                        class="px-4 py-10 lg:p-0">
                        <h2 class="text-5xl font-bold text-center text-primary lg:text-left">Our notable <span
                                class="italic highlight text-accent">app</span> moments</h2>
                    </div>
                    <div id="c-title2" x-show.transition.in.opacity.duration.1000="features === 1" id="title"
                        class="px-4 py-10 lg:p-0">
                        <h2 class="text-5xl font-bold text-center text-primary lg:text-left">Our notable <span
                                class="italic highlight text-accent">remarks</span> moments</h2>
                    </div>
                    <div id="c-title3" x-show.transition.in.opacity.duration.1000="features === 2" id="title"
                        class="px-4 py-10 lg:p-0">
                        <h2 class="text-5xl font-bold text-center text-primary lg:text-left">Our notable <span
                                class="italic highlight text-accent">research</span> moments</h2>
                    </div>
                </div>
                <div class="w-full lg:w-8/12">
                    <div id="content1" x-show.transition.in.opacity.duration.1000="features === 0"
                        class="grid grid-cols-2 gap-16">
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>

                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">Travel</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>


                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">World Wide</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                    </svg>


                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">Booking</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>



                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">World Wide</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                                    </svg>


                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">Travel</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>


                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">World Wide</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="content2" x-show.transition.in.opacity.duration.1000="features === 1"
                        class="grid grid-cols-2 gap-16">
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>

                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">Travel</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>


                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">World Wide</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                    </svg>


                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">Booking</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>



                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">World Wide</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                                    </svg>


                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">Travel</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>


                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">World Wide</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="content3" x-show.transition.in.opacity.duration.1000="features === 2"
                        class="grid grid-cols-2 gap-16">
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>

                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">Instant</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>


                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">World Wide</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                    </svg>


                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">Booking</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>



                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">World Wide</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                                    </svg>


                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">Travel</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>


                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">World Wide</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div id="posts" class="rounded-bl-[50px] rounded-tr-[50px] overflow-hidden my-32">
            <div class="grid grid-cols-2 gap-6">
                @foreach($posts as $post)
                <div class="relative col-span-2 lg:col-span-1" data-aos="fade-up">
                    <img class="object-cover w-full origin-center h-[500px]"
                        src="{{$post->image}}"
                        alt="">
                    <div class="absolute w-5/6 p-10 lg:w-3/6 bottom-10 left-10 bg-accent rounded-tl-3xl rounded-br-3xl">
                        <h1 class="text-2xl font-bold tracking-tight text-white">{{$post->title}}</h1>
                        <a href="{{$post->slug}}"
                            class="inline-flex items-center py-5 space-x-2 text-sm font-medium text-white uppercase group"><span
                                class="group-hover:text-primary">See
                                more</span> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="w-6 h-6 transition duration-200 ease-linear group-hover:text-primary group-hover:translate-x-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div id="team">
            <div id="team1" class="w-9/12 mx-auto">
                <div class="flex space-x-10">
                    <div class="w-full lg:w-7/12">
                        <h2 class="text-4xl font-bold text-accent">Meet our team</h2>
                        <h1 class="text-6xl font-bold leading-snug text-primary">Andy Matt</h1>
                        <p class="text-2xl font-bold text-primary">Chief Marketing</p>
                        <p class="my-10 text-xl font-medium leading-9">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.
                            Eligendi
                            officiis minus iste rerum sequi consectetur provident deserunt voluptatibus exercitationem
                            laudantium cum, similique dolore tempore mollitia, animi alias at earum repellendus!</p>
                        <a href="#"
                            class="px-8 py-4 text-sm font-bold text-white uppercase transition duration-200 ease-linear rounded-lg bg-primary hover:bg-accent">Read
                            more</a>
                    </div>
                    <div class="hidden lg:flex lg:w-5/12">
                        <img class="rounded-tr-[50px] rounded-bl-[50px] h-[500px] w-full object-cover origin-bottom"
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                            alt="">
                    </div>
                </div>

            </div>
        </div>

        <div id="difference"
            class="relative rounded-bl-[50px] min-h-[500px] p-10 lg:p-20 rounded-tr-[50px] overflow-hidden my-32">
            <img class="absolute top-0 left-0 right-0 object-cover w-full h-full"
                src="/img/differences/bg.avif"
                alt="">
            <div class="relative z-10 bg-primary rounded-bl-[50px] rounded-tr-[50px] h-full w-full">
                <div class="grid grid-cols-12 gap-6 px-12 py-16 lg:px-24 md:divide-x divide-white/20">
                    <div class="col-span-12 py-6 md:col-span-6 xl:col-span-3">
                        <h1 class="text-5xl font-bold text-center text-white md:text-left">What<br /> <span
                                class="italic highlight text-accent">makes
                                us</span><br />
                            different</h1>
                        <a href="#"
                            class="inline-flex items-center justify-center w-full px-8 py-4 my-5 font-bold tracking-tight text-white uppercase rounded-lg md:w-auto bg-accent hover:text-primary">Contact
                            us</a>
                    </div>
                    <div class="col-span-12 md:px-8 md:col-span-6 xl:col-span-3">
                        <p class="pb-6 text-4xl font-bold text-accent">01</p>

                        <h2 class="pb-6 text-lg font-bold text-white uppercase">Practical booking functionality</h2>
                        <p class="text-sm leading-8 text-white/50">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.
                            Doloribus commodi ea,
                            placeat deserunt, culpa praesentium quod nobis.</p>
                    </div>
                    <div class="col-span-12 md:px-8 md:col-span-6 xl:col-span-3">
                        <p class="pb-6 text-4xl font-bold text-accent">02</p>

                        <h2 class="pb-6 text-lg font-bold text-white uppercase">Practical booking functionality</h2>
                        <p class="text-sm leading-8 text-white/50">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.
                            Doloribus commodi ea,
                            placeat deserunt, culpa praesentium quod nobis.</p>
                    </div>
                    <div class="col-span-12 md:px-8 md:col-span-6 xl:col-span-3">
                        <p class="pb-6 text-4xl font-bold text-accent">03</p>

                        <h2 class="pb-6 text-lg font-bold text-white uppercase">Practical booking functionality</h2>
                        <p class="text-sm leading-8 text-white/50">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.
                            Doloribus commodi ea,
                            placeat deserunt, culpa praesentium quod nobis.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="building" class="py-16">
            <h1 class="w-5/6 mx-auto text-6xl font-bold text-center lg:text-7xl text-primary">Building <span
                    class="italic highlight text-accent">enduring</span> value
                through
                bold strategies</h1>
            <div class="grid w-9/12 grid-cols-12 gap-8 mx-auto my-24">
                <div class="col-span-12 md:col-span-6 lg:col-span-3">
                    <div class="flex items-center space-x-4">
                        <div class="w-2 h-16 bg-accent"></div>
                        <div>
                            <p class="font-bold text-7xl text-primary">129</p>
                            <p class="text-sm uppercase text-primary ">Cases completed</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3">
                    <div class="flex items-center space-x-4">
                        <div class="w-2 h-16 bg-accent"></div>
                        <div>
                            <p class="font-bold text-7xl text-primary">15</p>
                            <p class="text-sm uppercase text-primary ">Consultants</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3">
                    <div class="flex items-center space-x-4">
                        <div class="w-2 h-16 bg-accent"></div>
                        <div>
                            <p class="font-bold text-7xl text-primary">498</p>
                            <p class="text-sm uppercase text-primary ">Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3">
                    <div class="flex items-center space-x-4">
                        <div class="w-2 h-16 bg-accent"></div>
                        <div>
                            <p class="font-bold text-7xl text-primary">23+</p>
                            <p class="text-sm uppercase text-primary ">Awards</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="contact-form" class="rounded-bl-[50px] rounded-tr-[50px] overflow-hidden mb-32">
            <div class="grid grid-cols-12">
                <div class="relative col-span-12 lg:col-span-5">
                    <img class="absolute left-0 right-0 z-0 object-cover w-full h-full" src="/img/contact/bg.avif"
                        alt="">
                    <div class="relative top-0 left-0 right-0 z-10 object-cover h-full px-24 py-24 lg:px-32 bg-primary/80">
                        <h1 class="text-4xl font-bold text-white lg:text-6xl">
                            Schedule a <span class="italic highlight">free business</span> consultation</h1>
                        <div class="flex flex-col my-16 space-y-8">
                            <div class="flex flex-row items-center space-x-4">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>

                                </div>
                                <div id="details">
                                    <p class="text-sm font-bold uppercase text-accent">Address</p>
                                    <p class="font-bold text-white">1010 Avenue of the Moon
                                        New York, NY 10018 US.</p>
                                </div>
                            </div>
                            <div class="flex flex-row items-center space-x-4">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                    </svg>


                                </div>
                                <div id="details">
                                    <p class="text-sm font-bold uppercase text-accent">Phone</p>
                                    <p class="font-bold text-white">+40 233 242 3312</p>
                                </div>
                            </div>
                            <div class="flex flex-row items-center space-x-4">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>

                                </div>
                                <div id="details">
                                    <p class="text-sm font-bold uppercase text-accent">Email</p>
                                    <p class="font-bold text-white">marketing@ez.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-7 bg-accent">
                    <div class="w-full p-10 lg:p-24">
                        <form action="" autocomplete="off">
                            <div class="grid grid-cols-2 gap-16">
                                <div class="col-span-1">
                                    <label for="name"
                                        class="inline-flex items-center w-full py-3 space-x-3 border-b-2 border-white focus:text-white group">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 text-primary group-focus:text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                        </svg>

                                        <input type="text" id="name" name="name" placeholder="Your name"
                                            class="w-full text-lg font-bold bg-transparent outline-none text-primary placeholder:text-primary focus:text-white group-focus:text-white active:text-white">
                                    </label>
                                </div>
                                <div class="col-span-1">
                                    <label for="company"
                                        class="inline-flex items-center w-full py-3 space-x-3 border-b-2 border-white focus:text-white group">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 text-primary group-focus:text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                                        </svg>

                                        <input autocomplete="false" type="text" id="company" name="company"
                                            placeholder="Your Company"
                                            class="text-lg w-full text-primary font-bold !bg-transparent outline-none placeholder:text-primary focus:text-white group-focus:text-white active:text-white">
                                    </label>
                                </div>
                                <div class="col-span-1">
                                    <label for="email"
                                        class="inline-flex items-center w-full py-3 space-x-3 border-b-2 border-white focus:text-white group">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 text-primary group-focus:text-white">
                                            <path stroke-linecap="round"
                                                d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
                                        </svg>



                                        <input autocomplete="false" type="email" id="email" name="email"
                                            placeholder="Your email address"
                                            class="text-lg w-full text-primary font-bold !bg-transparent outline-none placeholder:text-primary focus:text-white group-focus:text-white active:text-white">
                                    </label>
                                </div>
                                <div class="col-span-1">
                                    <label for="subject"
                                        class="inline-flex items-center w-full py-3 space-x-3 border-b-2 border-white focus:text-white group">


                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 text-primary group-focus:text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                        </svg>



                                        <select name="subject" id="subject"
                                            class="text-lg text-primary w-full marker:text-white  font-bold !bg-transparent outline-none placeholder:text-primary focus:text-white group-focus:text-white active:text-white">
                                            >
                                            <option value="1">I would like to discuss</option>
                                            <option value="2">Marketing</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="w-full col-span-2">
                                    <label for="message"
                                        class="inline-flex items-center w-full py-3 space-x-3 border-b-2 border-white focus:text-white group">


                                        <textarea name="message" rows="6" id="message" placeholder="Message"
                                            class="w-full text-lg font-bold bg-transparent outline-none resize-none text-primary placeholder:text-primary focus:text-white group-focus:text-white active:text-white"></textarea>

                                    </label>
                                </div>
                                <div class="col-span-1">
                                    <button
                                        class="px-8 py-4 font-bold text-white uppercase transition duration-150 ease-linear border-4 border-transparent rounded-lg hover:bg-accent hover:border-white bg-primary">Submit</button>
                                </div>
                            </div>

                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
