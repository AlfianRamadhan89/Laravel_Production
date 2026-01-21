<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('blog', [
            // "title" => "Blog",
            "title" => "All Posts",
            // "posts" => Post::all()
            "posts" => Post::with(['author', 'category'])->latest()->get()
        ]);
    }

    public function show(Post $posts)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $posts
        ]);
    }
}
