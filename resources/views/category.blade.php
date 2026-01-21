@extends('layouts.main')

@section('container')
    <h2 class="mb-4 border-bottom pb-3">{{ $title }}</h2><br>

    @foreach ($posts as $post)
        <article class="mb-4 border-bottom pb-3">
            <h2><a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
            <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a></p>
            {{-- <p>{{ $post->excerpt }}</p> --}}
            {!! $post->excerpt !!}
        </article>
    @endforeach

    <a href="/blog" class="text-decoration-none">Back to Blog</a>
@endsection