@extends('frontend.layouts.app')

@section('title', __('Homepage'))

@section('content')
    <div class="p-2 lg:px-16">

        <div id="post-header"
            class="relative rounded-bl-[50px] min-h-[500px] p-10 lg:p-20 rounded-tr-[50px] overflow-hidden my-32">
            <img class="absolute top-0 left-0 right-0 object-cover w-full h-full" src="{{ $post.image }}"
                alt="{{ $post.title }}">
            <div class="relative z-10 bg-primary rounded-bl-[50px] rounded-tr-[50px] h-full w-full">
                <div class="px-12 py-16 lg:px-24 ">
                    <h1>{{ $post.title }}</h1>
                </div>
            </div>
        </div>

        <div id="post-content">
            <p class="prose lg:prose-xl">
                {{ $post.content }}
            </p>
        </div>

    </div>


@endsection
