@extends('dashboard.layouts.main')

@section('container')
<h1 class="mb=5">Category : {{ $category->name }}</h1>
<img src="https://source.unsplash.com/1200x400?{{ $category->name }}" alt="{{ $category->name }}" class="img-fluid mt-3"/>
@endsection