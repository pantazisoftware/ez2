@extends('frontend.layouts.app')

@section('title', __('Homepage'))

@section('content')
{{-- {{ dd($post) }} --}}
    <div class="p-2 lg:px-16">

        <div id="post-header"
            class="relative rounded-bl-[50px] min-h-[500px] p-10 lg:p-20 rounded-tr-[50px] overflow-hidden my-32 w-full lg:w-5/6 mx-auto">
            <img class="absolute top-0 left-0 right-0 object-cover w-full h-full" src="{{ $post['image'] }}"
                alt="{{ $post['title'] }}">
            <div class="relative z-10 bg-primary/80 rounded-bl-[50px] rounded-tr-[50px] h-full w-full">
                <div class="px-12 py-16 lg:px-24">
                    <h1 class="text-white text-4xl md:text-5xl lg:text-6xl font-bold dropshadow">{{ $post['title'] }}</h1>
                </div>
            </div>
        </div>

        <div id="post-content">
            <p class="prose lg:prose-xl mx-auto">
                {{ $post['content'] }}
            </p>
        </div>

    </div>


@endsection
