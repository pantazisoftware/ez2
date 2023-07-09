@extends('frontend.layouts.app')

@section('title', __('Contact us'))

@section('content')
    <div class="w-full px-2 mx-auto my-10 md:px-0 md:w-5/6 lg:w-4/6 text-body">
        <div class="grid grid-cols-12 gap-6">
            <div class="relative col-span-12 sm:col-span-6 lg:col-span-4">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                    class="object-cover w-full aspect-square" alt="">
            </div>
            <div class="relative col-span-12 overflow-hidden sm:col-span-6 lg:col-span-4 aspect-square">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d44848.861125118856!2d26.093695075548215!3d44.448587347188806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sro!2sro!4v1688822416290!5m2!1sro!2sro"
                    style="border:0;" class="absolute left-0 right-0 w-full h-full" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="relative col-span-12 lg:col-span-4 h-96">
                <img src="https://images.unsplash.com/photo-1470075801209-17f9ec0cada6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=987&q=80"
                    class="absolute left-0 right-0 object-cover w-full h-full" alt="">
                <div class="absolute left-0 right-0 h-full p-4 bg-primary/90 lg:p-10">
                    <h2 class="mb-5 text-lg font-black text-white lg:text-xl">contact details</h2>
                    <div class="flex flex-row items-start py-2 space-x-2 text-sm text-white">
                        <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5 text-accent">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </div>
                        <div>
                            <p>1010 Avenue of the Moon New York, NY 10018 US.</p>
                        </div>
                    </div>
                    <div class="flex flex-row items-start py-2 space-x-2 text-sm text-white">
                        <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5 text-accent">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>

                        </div>
                        <div>
                            <p>+40 234 542 4453</p>
                        </div>
                    </div>
                    <div class="flex flex-row items-start py-2 mb-5 space-x-2 text-sm text-white">
                        <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5 text-accent">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>


                        </div>
                        <div>
                            <a href="#" class="hover:underline">consulting@google.ro</a>
                        </div>
                    </div>
                    <div class="flex flex-row items-center space-x-2">
                        <a href="#"
                            class="flex items-center justify-center overflow-hidden bg-white border border-transparent rounded-full w-9 h-9 group">
                            <svg role="img" viewBox="0 0 24 24" class="fill-gray-800 group-hover:fill-blue-900/80"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>Facebook</title>
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="flex items-center justify-center overflow-hidden bg-white border border-transparent rounded-full w-9 h-9 group">
                            <svg role="img" viewBox="0 0 24 24"
                                class="w-5 h-5 align-middle fill-gray-800 group-hover:fill-blue-400"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>Twitter</title>
                                <path
                                    d="M21.543 7.104c.015.211.015.423.015.636 0 6.507-4.954 14.01-14.01 14.01v-.003A13.94 13.94 0 0 1 0 19.539a9.88 9.88 0 0 0 7.287-2.041 4.93 4.93 0 0 1-4.6-3.42 4.916 4.916 0 0 0 2.223-.084A4.926 4.926 0 0 1 .96 9.167v-.062a4.887 4.887 0 0 0 2.235.616A4.928 4.928 0 0 1 1.67 3.148 13.98 13.98 0 0 0 11.82 8.292a4.929 4.929 0 0 1 8.39-4.49 9.868 9.868 0 0 0 3.128-1.196 4.941 4.941 0 0 1-2.165 2.724A9.828 9.828 0 0 0 24 4.555a10.019 10.019 0 0 1-2.457 2.549z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="flex items-center justify-center overflow-hidden bg-white border border-transparent rounded-full w-9 h-9 group">
                            <svg role="img" viewBox="0 0 24 24" class="w-5 h-5 fill-gray-800 group-hover:fill-sky-500"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>Skype</title>
                                <path
                                    d="M12.069 18.874c-4.023 0-5.82-1.979-5.82-3.464 0-.765.561-1.296 1.333-1.296 1.723 0 1.273 2.477 4.487 2.477 1.641 0 2.55-.895 2.55-1.811 0-.551-.269-1.16-1.354-1.429l-3.576-.895c-2.88-.724-3.403-2.286-3.403-3.751 0-3.047 2.861-4.191 5.549-4.191 2.471 0 5.393 1.373 5.393 3.199 0 .784-.688 1.24-1.453 1.24-1.469 0-1.198-2.037-4.164-2.037-1.469 0-2.292.664-2.292 1.617s1.153 1.258 2.157 1.487l2.637.587c2.891.649 3.624 2.346 3.624 3.944 0 2.476-1.902 4.324-5.722 4.324m11.084-4.882l-.029.135-.044-.24c.015.045.044.074.059.12.12-.675.181-1.363.181-2.052 0-1.529-.301-3.012-.898-4.42-.569-1.348-1.395-2.562-2.427-3.596-1.049-1.033-2.247-1.856-3.595-2.426-1.318-.631-2.801-.93-4.328-.93-.72 0-1.444.07-2.143.204l.119.06-.239-.033.119-.025C8.91.274 7.829 0 6.731 0c-1.789 0-3.47.698-4.736 1.967C.729 3.235.032 4.923.032 6.716c0 1.143.292 2.265.844 3.258l.02-.124.041.239-.06-.115c-.114.645-.172 1.299-.172 1.955 0 1.53.3 3.017.884 4.416.568 1.362 1.378 2.576 2.427 3.609 1.034 1.05 2.247 1.857 3.595 2.442 1.394.6 2.877.898 4.404.898.659 0 1.334-.06 1.977-.179l-.119-.062.24.046-.135.03c1.002.569 2.126.871 3.294.871 1.783 0 3.459-.69 4.733-1.963 1.259-1.259 1.962-2.951 1.962-4.749 0-1.138-.299-2.262-.853-3.266" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-6 my-16">
            <div class="col-span-12 lg:col-span-8">
                <h2 class="mb-4 text-xl font-bold text-primary">Feedback form</h2>
                <div class="grid grid-cols-2 gap-5">
                    <div class="grid col-span-2 gap-5 md:col-span-1">
                        <input type="text" placeholder="Your name *"
                            class="h-full w-full text-sm bg-neutral-300 px-3 py-2.5 outline-none transition duration-300 ease-linear focus:outline-accent focus:bg-white">
                        <input type="text" placeholder="Your email *"
                            class="h-full w-full text-sm bg-neutral-300 px-3 py-2.5 outline-none transition duration-300 ease-linear focus:outline-accent focus:bg-white">
                        <input type="text" placeholder="Your Phone *"
                            class="h-full w-full text-sm bg-neutral-300 px-3 py-2.5 outline-none transition duration-300 ease-linear focus:outline-accent focus:bg-white">
                    </div>
                    <div class="grid col-span-2 gap-5 md:col-span-1">
                        <textarea name="mesaj" id="mesaj" rows="4" placeholder="Message *"
                            class="h-full w-full text-sm bg-neutral-300 resize-y px-3 py-2.5 outline-none transition duration-300 ease-linear focus:outline-accent focus:bg-white"></textarea>

                        <div>
                            <button
                                class="inline-flex items-center px-4 py-2 space-x-2 font-bold tracking-normal text-white uppercase rounded-lg bg-primary hover:bg-accent"><span>Submit</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="striaght" stroke-linejoin="round"
                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-4">
                <h2 class="mb-4 text-xl font-bold text-primary">Your contact</h2>
                <div class="flex flex-col space-y-10">
                    <div class="flex flex-row space-x-2">
                        <div id="image" class="flex-none w-32">
                            <img class="object-cover origin-center aspect-square"
                                src="https://images.unsplash.com/photo-1552058544-f2b08422138a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=999&q=80"
                                alt="">
                        </div>
                        <div id="name">
                            <p class="text-lg text-primary">Mark Tomson</p>
                            <p class="text-sm font-bold">Head of communications</p>
                            <p class="inline-flex space-x-1 text-sm">Email: <a href="#"
                                    class="hover:underline">mark.tompson@admin.ro</a></p>
                            <p class="inline-flex space-x-1 text-sm">Phone: <a href="#" class="hover:underline">+40
                                    734
                                    234
                                    2234</a></p>
                        </div>
                    </div>
                    <div class="flex flex-row space-x-2">
                        <div id="image" class="flex-none w-32">
                            <img class="object-cover origin-center aspect-square"
                                src="https://images.unsplash.com/photo-1554151228-14d9def656e4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=986&q=80"
                                alt="">
                        </div>
                        <div id="name">
                            <p class="text-lg text-primary">Erika Michel</p>
                            <p class="text-sm font-bold">Sales Manager</p>
                            <p class="inline-flex space-x-1 text-sm">Email: <a href="#"
                                    class="hover:underline">erika.michel@admin.ro</a></p>
                            <p class="inline-flex space-x-1 text-sm">Phone: <a href="#" class="hover:underline">+40
                                    734
                                    542
                                    2232</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endsection
