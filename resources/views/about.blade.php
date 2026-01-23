@extends('layouts.main')

@section('container')
    <h1>Welcome to Alfian's Blog About Page</h1>
    <h3>Halo, nama saya {{ $name }}</h3>
    <p>Alamat email saya adalah {{ $email }}</p>
    <img src="/img/{{ $image }}" alt="{{ $name }}" width="220" height="250" class="rounded-circle">
@endsection