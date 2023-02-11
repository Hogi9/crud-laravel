@extends('layouts.main')
@section('container')
    <h3>Category : {{ $category }}</h3>
    @foreach ($posts as $post)
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->excerpt }}</p>
    @endforeach
@endsection