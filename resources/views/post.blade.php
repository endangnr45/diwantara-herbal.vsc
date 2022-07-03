@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <article>
                <h2>{{ $post["title"] }}</h2>
                <h5>{{ $post["name"] }}</h5>
                <p>Kategori: <a href="/categories/{{ $post->category->slug }}">
                    {{ $post->category->name }}</a>
                </p>
                @if ($post->image)
                <div style="height: 170px; width:297px; overflow:hidden;">
                    <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3"/>  
                </div>
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" 
                @endif

                <h6>Rp {{ $post["price"] }}/{{ $post['unit'] }}</h6>
                <article class="my-3">
                {!! $post->body !!}
                </article>
            </article>
            <a href="#" class="btn btn-success">Order</a>
            <a href="/posts "class="btn btn-secondary">Back to Posts</a><br>
        </div>
    </div>
</div>

@endsection