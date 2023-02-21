@extends('layouts.main')
@section('container')

    @if($posts->count())
    <h2>{{ $title }}</h2>
    <div class="card mb-3">
        <img src="https://picsum.photos/1200/300" class="card-img-top" alt="{{ $posts[0]->title }}">
        <div class="card-body text-center">
            <h5 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none" style="color:black">{{ $posts[0]->title }}</a></h5>
            <small class="text-muted">By : <a class="text-decoration-none" href="/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</small>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
        </div>
    </div>
    @else
        <p>No Post Found.</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-2">
                <div class="card">
                    <div class="position-absolute px-2 py-1 text-white" style="background-color:rgba(0,0,0,0.7)"><a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
                    <img src="https://picsum.photos/500/400?random={{ $post->id }}" class="card-img-top" alt="{{ $post->title }}">
                    <div class="card-body">
                        <h5 class="card-title text-center"><a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                        <small class="text-muted">By : <a class="text-decoration-none" href="/{{ $post->author->username }}">{{ $post->author->name }}</a></small>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <div class="text-center">
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
@endsection