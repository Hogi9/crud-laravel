@extends ('layouts.main')
@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>{{ $post->title }}</h2>
            <h5>By : <a href="/?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/?catgory={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
            <img src="https://picsum.photos/1200/400" class="img-fluid mb-1" alt="{{ $post->title }}">
            <p>{!! $post->body !!}</p>
            <div class="mb-5"><a href="/">Back to Home</a></div>
        </div>
    </div>
</div>
@endsection