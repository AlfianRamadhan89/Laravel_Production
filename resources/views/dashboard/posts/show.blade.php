@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Post Details</h1>
        <h1 class="h2">{{ $post->title }}</h1>
    </div>

    <a href="/dashboard/posts" class="btn btn-success mb-3"><i class="bi bi-arrow-left"></i></a>
    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mb-3"><i class="bi bi-pencil"></i></a>
    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger mb-3" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
    </form>

    <article class="my-3 fs-5">
        {!! $post->body !!}
    </article>

@endsection