<div id="industries" class="bg-accent rounded-bl-[50px] rounded-tr-[50px] relative">

            <h1 class="pt-16 pb-8 text-5xl font-bold text-center uppercase lg:text-7xl text-primary">{{ $industries['title'] }}</h1>
            <p class="w-5/6 mx-auto text-center text-white text-balance lg:w-3/6">{{ $industries['short'] }}</p>
            <div class="grid grid-cols-12 px-20 py-20 divide-y lg:py-32 md:divide-y-0 lg:divide-x divide-white/60">
                @foreach ($industries['data'] as $industry)
                <div data-aos="fade-up" class="col-span-12 p-6 md:col-span-6 lg:col-span-3" data-aos="fade-up" data-aos-duration="700">
                    <p>
                       {!! $industry['icon'] !!}

                    </p>
                    <h3 class="pt-5 text-2xl font-bold text-primary">{{ $industry['title']}}</h3>
                    <p class="py-5 text-white text-blance">{{ $industry['content'] }}</p>
                </div>
                @endforeach
              
            </div>
        </div>