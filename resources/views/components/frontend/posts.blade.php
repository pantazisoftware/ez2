 <div id="posts" class="rounded-bl-[50px] rounded-tr-[50px] overflow-hidden my-32">
            <div class="grid grid-cols-2 gap-6">
                @foreach($posts as $post)
                <div class="relative col-span-2 lg:col-span-1" data-aos="fade-up">
                    <img class="object-cover w-full origin-center h-[500px]"
                        src="{{$post->image}}"
                        alt="">
                    <div class="absolute w-5/6 p-10 lg:w-3/6 bottom-10 left-10 bg-accent rounded-tl-3xl rounded-br-3xl">
                        <h1 class="text-2xl font-bold tracking-tight text-white">{{$post->title}}</h1>
                        <a href="{{ route('frontend.blog.post', $post->slug) }}"
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