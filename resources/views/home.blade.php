@extends('layouts.main')
@section('container')
    <h2>{{ $title }}</h2>
    @foreach ($posts as $post)
    <article class="mb-5">
        <h2>
            <a class="text-decoration-none" href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>   
        <h5>By : <a class="text-decoration-none" href="/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
        <p>{{ $post->excerpt }}</p>
    </article>
    @endforeach
@endsection