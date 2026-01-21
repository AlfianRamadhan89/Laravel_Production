<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Alfian Ramadhan",
        "email" => "alfian@example.com"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('/post/{posts:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Categories',
        'categories' => Category::all(),
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('blog', [
        'title' => 'Posts in Category: ' . $category->name,
        'posts' => $category->posts->load('category', 'author'),
        // 'category' => $category->name,
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('blog', [
        'title' => 'Posts By Author: ' . $author->name,
        'posts' => $author->posts->load('category', 'author'),
        // 'user' => $author->name,
    ]);
});