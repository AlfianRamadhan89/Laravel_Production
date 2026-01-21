@extends('layouts.main')

@section('container')
    <h2 class="mb-4 border-bottom pb-3">{{ $title }}</h2><br>
    
    @foreach ($posts as $post)
        <article class="mb-4 border-bottom pb-3">
            <h3>
                <a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
            </h3>
            <p>Category : <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
    <a href="/blog" class="text-decoration-none">Back to Blog</a>
@endsection