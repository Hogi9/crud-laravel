@extends ('layouts.main')
@section('container')

<article>
    <h2>{{ $post->title }}</h2>
    <h5>By : {{ $post->author->name }} in {{ $post->category->name }}</h5>
    <p>{!! $post->body !!}</p>
</article>

<a href="/">Back to Home</a>
    
@endsection