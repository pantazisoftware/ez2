<?php

namespace App\Http\Controllers\Backend;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Config;

/**
 * Class DashboardController.
 */
class DashboardController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('backend.dashboard');
    }

    public function listPost()
    {
        $posts = Post::limit(10)->orderBy('created_at', 'desc')->get();
        return view('backend.blog.index', compact('posts'));
    }

    public function createPost()
    {
        return view('backend.blog.create');
    }

    public function editPost($id)
    {
        $post = Post::where('id', $id)->firstOrFail();
        return view('backend.blog.edit', compact('post'));
    }

    public function storePost(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|max:255',
            'title' => 'required',
            'content' => 'required|min:5',
        ]);

        $validatedData['slug'] = Str::slug($validatedData['title'], "-");

        Post::create($validatedData);

        return redirect(route('admin.post.list'));
    }

    public function updatePost(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|max:255',
            'title' => 'required',
            'content' => 'required|min:5',
        ]);

        $validatedData['slug'] = Str::slug($validatedData['title'], "-");

        Post::where('id', $request->input('id'))->update($validatedData);

        return redirect(route('admin.post.list'));
    }

    public function pageContent()
    {
        return view('backend.content.index');
    }

    public function storePageContent(Request $request)
    {
        $data = [
            1 => [
                'id' => 1,
                'image' => $request->input('image1'),
                'title' => $request->input('title1'),
                'href' => $request->input('href1'),
            ],
            2 => [
                'id' => 2,
                'image' => $request->input('image2'),
                'title' => $request->input('title2'),
                'href' => $request->input('href2'),
            ],
            3 => [
                'id' => 3,
                'image' => $request->input('image3'),
                'title' => $request->input('title3'),
                'href' => $request->input('href3'),
            ],
            4 => [
                'id' => 4,
                'image' => $request->input('image4'),
                'title' => $request->input('title4'),
                'href' => $request->input('href4'),
            ],
        ];

        // Config::set('homepage.hero', $data);
        //   config(['homepage.hero' => $data]);
          config(['homepage.hero.2.title' => 'test title...']);

          // dd($data);
 
        return redirect()->back()->with('success', 'Configuration updated successfully!');
    }
}
