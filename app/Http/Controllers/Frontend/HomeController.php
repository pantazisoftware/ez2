<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;

/**
 * Class HomeController.
 */
class HomeController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(2)->get();
        return view('frontend.index', compact('posts'));
    }

    public function services()
    {
        return view('frontend.pages.services');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
