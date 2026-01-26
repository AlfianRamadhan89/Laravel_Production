@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>
                <p>
                    <small class="text-muted">
                        By. <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}
                    </small>
                </p>
                {{-- <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mb-3" alt="{{ $post->category->name }}"> --}}
                @if ($post->image)
                    <div style="max-height: 400px; overflow:hidden;" class="mb-4">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                    </div>
                @else
                    <img src="https://picsum.photos/seed/picsum/1200/400" class="img-fluid mb-3" alt="{{ $post->category->name }}">
                @endif

                {!! $post->body !!}
                <div class="mt-4">
                    <a href="/blog" class="text-decoration-none">Back to Blog</a>
                </div>
            </div>
        </div>
    </div>
    
@endsection
