@extends('layouts.main')
@section('container')
@foreach($categories as $category)
<h1>{{ $category->name }}</h1>
@endforeach
@endsection