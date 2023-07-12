<div x-data="{ mobilesubmenu: false, mobilemenu: false, open: false }">
    <nav class="flex relative z-99 flex-row justify-between items-center py-9 bg-white px-[15px] lg:px-14"
        x-on:mouseover.away="open = false">
        <div>
            <a href="">
                <img src="https://consulting.stylemixthemes.com/manchester/wp-content/uploads/sites/50/2021/08/logo_dark.svg"
                    alt=""></a>
        </div>
        <div class="relative flex-row hidden lg:flex gap-x-5">
            <a href="#"
                class="text-sm font-bold uppercase duration-75 ease-linear text-primary hover:text-accent trasition"
                x-on:mouseover="open = true" x-on:click="open = !open">Services</a>
            <a href="#"
                class="text-sm font-bold uppercase duration-75 ease-linear text-primary hover:text-accent trasition">Cases</a>
            <a href="#"
                class="text-sm font-bold uppercase duration-75 ease-linear text-primary hover:text-accent trasition">Portofolio</a>
            <a href="#"
                class="text-sm font-bold uppercase duration-75 ease-linear text-primary hover:text-accent trasition">Contact</a>


        </div>
        <div class="flex-row hidden space-x-10 lg:flex">
            <div class="flex flex-row items-center space-x-3">
                <div>
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        class="w-[29px] h-[29px] fill-accent">
                        <title>Skype for Business</title>
                        <path
                            d="M14.04 10.92l-2.52-.56c-.96-.24-2.04-.52-2.04-1.44 0-.92.76-1.56 2.16-1.56 2.84 0 2.6 1.96 4 1.96.72 0 1.36-.4 1.36-1.16 0-1.76-2.8-3.08-5.2-3.08-2.56 0-5.28 1.08-5.28 4 0 1.4.48 2.92 3.24 3.64l3.44.88c1.04.24 1.36.84 1.36 1.36 0 .88-.92 1.84-2.48 1.84-3.08 0-2.64-2.44-4.28-2.44-.72 0-1.32.52-1.32 1.24 0 1.44 1.76 3.4 5.6 3.4 3.68 0 5.52-1.84 5.52-4.24-.04-1.6-.76-3.2-3.56-3.84zm9.08 3.04c.12-.64.16-1.28.16-1.96C23.28 5.76 18.24.72 12 .72c-.68 0-1.32.04-1.96.16C9.04.32 7.92 0 6.72 0 3 0 0 3 0 6.72c0 1.2.32 2.36.88 3.32-.12.64-.16 1.28-.16 1.96 0 6.24 5.04 11.28 11.28 11.28.68 0 1.32-.04 1.96-.16 1 .56 2.12.88 3.32.88C21 24 24 21 24 17.28c0-1.2-.32-2.36-.88-3.32zm-5.84 8.32c-.88 0-1.72-.24-2.48-.64l-.52-.32-.6.12c-.52.08-1.08.16-1.68.16a9.56 9.56 0 01-9.56-9.56c0-.56.04-1.12.16-1.68l.12-.6-.32-.52c-.44-.76-.64-1.6-.64-2.48 0-2.76 2.24-5 5-5 .88 0 1.72.24 2.48.64l.52.32.6-.12c.56-.08 1.12-.16 1.68-.16A9.56 9.56 0 0121.6 12c0 .56-.04 1.12-.16 1.68l-.12.6.32.52c.44.76.64 1.6.64 2.48 0 2.76-2.24 5-5 5Z" />
                    </svg>
                </div>
                <div>
                    <p class="font-bold leading-5">consulting</p>
                    <p class="text-xs text-gray-500 uppercase">• online</p>
                </div>
            </div>
            <div class="flex flex-row items-center space-x-3">
                <div>
                    <svg role="img" viewBox="0 0 24 24" class="w-[29px] h-[29px] fill-accent"
                        xmlns="http://www.w3.org/2000/svg">
                        <title>WhatsApp</title>
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                    </svg>
                </div>
                <div>
                    <p class="font-bold leading-5">212 386 5575</p>
                    <p class="text-xs text-gray-500 uppercase">CALL OR MESSAGE</p>
                </div>
            </div>
        </div>
        <div id="mobile-btn" class="lg:hidden">
            <button class="text-gray-500" x-on:click="mobilemenu = ! mobilemenu">
                <svg fill="none" stroke="currentColor" class="w-8 h-8 text-gray-500" stroke-width="1.5"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5">
                    </path>
                </svg>
            </button>
        </div>

        <div x-cloak x-show="open" class="absolute left-0 right-0 z-20 mx-16 bg-white top-24 drop-shadow-3xl">
            <div class="flex flex-row justify-center">
                <div id="menu" class="flex justify-center w-2/3 py-10 divide-x divide-gray-200">
                    <div class="flex flex-col w-full px-10 pb-10">
                        <h2 class="pb-8 font-bold text-primary">Cases</h2>
                        <div class="flex flex-col space-y-4">
                            <a href="#" class="font-medium text-primary hover:text-accent">Case 1</a>
                            <a href="#" class="font-medium text-primary hover:text-accent">Case 2</a>
                            <a href="#" class="font-medium text-primary hover:text-accent">Case 3</a>
                            <a href="#" class="font-medium text-primary hover:text-accent">Case 4</a>
                        </div>
                    </div>
                    <div class="flex flex-col w-full px-10 pb-10">
                        <h2 class="pb-8 font-bold text-primary">Services</h2>
                        <div class="flex flex-col space-y-4">
                            <a href="#" class="font-medium text-primary hover:text-accent">Service 1</a>
                            <a href="#" class="font-medium text-primary hover:text-accent">Service 2</a>
                            <a href="#" class="font-medium text-primary hover:text-accent">Service 3</a>
                            <a href="#" class="font-medium text-primary hover:text-accent">Service 4</a>
                        </div>
                    </div>
                    <div class="flex flex-col w-full px-10 pb-10">
                        <h2 class="pb-8 font-bold text-primary">Teams</h2>
                        <div class="flex flex-col space-y-4">
                            <a href="#" class="font-medium text-primary hover:text-accent">Team 1</a>
                            <a href="#" class="font-medium text-primary hover:text-accent">Team 2</a>
                            <a href="#" class="font-medium text-primary hover:text-accent">Team 3</a>
                            <a href="#" class="font-medium text-primary hover:text-accent">Team 4</a>
                        </div>
                    </div>
                </div>

                <div>
                    <img class="object-cover h-96"
                        src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2344&q=80"
                        alt="">
                </div>
            </div>
        </div>


    </nav>

    <div x-cloak x-show="mobilemenu" id="mobile-menu" class="w-full bg-primary">
        <div class="flex flex-col py-8 space-y-8">
            <div>
                <a class="font-bold px-6 py-3 uppercase text-white hover:text-[#fde428] flex justify-between items-center"
                    href="#" x-on:click="mobilesubmenu = ! mobilesubmenu"><span>Services</span> <svg
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </a>
                <div id="submenu" class="flex flex-col py-4 mt-4 space-y-8 bg-white" x-show="mobilesubmenu"
                    x-transition:enter.scale.80 x-transition:leave.scale.90>
                    <a class="px-6 py-3 font-bold uppercase text-primary hover:text-accent" href="#">Sub Service
                        1</a>
                    <a class="px-6 py-3 font-bold uppercase text-primary hover:text-accent" href="#">Sub Service
                        2</a>
                    <a class="px-6 py-3 font-bold uppercase text-primary hover:text-accent" href="#">Sub Service
                        3</a>
                </div>
            </div>
            <div>
                <a class="font-bold px-6 py-3 uppercase text-white hover:text-[#fde428] flex" href="#">Cases</a>
            </div>
            <div>
                <a class="font-bold px-6 py-3 uppercase text-white hover:text-[#fde428] flex"
                    href="#">Portofolio</a>
            </div>
            <div>
                <a class="font-bold px-6 py-3 uppercase text-white hover:text-[#fde428] flex"
                    href="#">Contact</a>
            </div>
        </div>
    </div>

</div>
