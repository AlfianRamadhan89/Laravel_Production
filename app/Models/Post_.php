<?php

namespace App\Models;

class Post_ 
{
    private static $blogPosts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Alfian Ramadhan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Budi Santoso",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod."
        ]
    ];

    public static function all()
    {
        return collect(self::$blogPosts);
    }

    public static function find($slug)
    {
        $post = static::all();
        return $post->firstWhere('slug', $slug);
    }
}
