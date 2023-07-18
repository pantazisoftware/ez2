<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Retrieve all blog posts
    public function index()
    {
        $posts = Post::limit(5)->orderBy('created_at', 'desc')->get();
        return view('frontend.blog.index', compact('posts'));
    }


    // Retrieve single blog post based on slug
    public function view($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('frontend.blog.post', compact('post'));
    }
}
