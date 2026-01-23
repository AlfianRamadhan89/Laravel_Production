@extends('layouts.main')

@section('container')

    <h1 class="mb-4 border-bottom pb-4">Post Categories</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/categories/{{ $category->slug }}" class="text-decoration-none">
                        <div class="card">
                            <img src="https://picsum.photos/id/137/400/300" class="card-img-top" alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center text-white bg-dark bg-opacity-50 flex-fill p-4 fs-3 rounded">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    
@endsection