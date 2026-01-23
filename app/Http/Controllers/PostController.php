<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $title = '';

        if (request('category')) {
            // $category = request('category');
            $category = Category::firstWhere('slug', request('category'))->name;
            $title = ' in ' . $category;
        }

        if (request('author')) {
            // $author = request('author');
            $author = User::firstWhere('username', request('author'))->name;
            $title = ' by ' . $author;
        }

        return view('blog', [
            "title" => "All Posts" . $title,
            "active" => "posts",
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString(),
        ]);
    }

    public function show(Post $posts)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => "posts",
            "post" => $posts
        ]);
    }
}
