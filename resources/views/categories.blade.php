@extends('layouts.main')
@section('container')
@foreach($categories as $category)
<h3><a href="/categories/{{ $category->slug }}"class="text-decoration-none">{{ $category->name }}</a></h3>
@endforeach
@endsection