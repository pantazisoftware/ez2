<div id="jumbo" x-data="{ jumbo: 1 }">
            <div id="jumbotron"
                class="w-full min-h-[400px] lg:h-[800px] relative rounded-bl-[50px] rounded-tr-[50px] overflow-hidden">


                @foreach ($hero_data as $hero)
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
                @foreach ($hero_data as $hero)
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