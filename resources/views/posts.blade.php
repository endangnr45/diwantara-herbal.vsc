@extends('layouts.main')

@section('container')
    {{-- <h1 class="mb-5">{{ $title }}</h1> --}}
    <center>
        @if ($posts->count())
            <div class="card mb-3">
                @if ($posts[0]->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/'.$posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid mt-3"/>  
                </div>
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
                @endif
                <div class="card-body text-center">
                    <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                    <p>
                        <small class="text-muted">
                        Kategori : <a href="/categories/{{ $posts[0]->category->slug}}" class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                        </small>
                    </p>
                    <h6 class="card-text">Rp {{ $posts[0]->price }}/{{ $posts[0]->unit }}
                    </h6>
                    <p class="card-text">{{ $posts[0]->excerpt }}...</p>
                    <a href="#" class="text-decoration-none btn btn-success">Order</a>
                    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-secondary">Read more</a><br>
                    <p class="card-text"><small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
                </div>
            </div>
        @else
            <p class="text-center fs-4">No post found.</p>
    
        @endif

    </center>

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2 " 
                    style="background-color: rgba(0, 0, 0, 0.7)">
                    <a href="/categories/{{ $post->category->slug}}" class="text-white text-decoration-none">
                        {{ $post->category->name }}
                    </a>
                    </div>
                    @if ($post->image)
                    <div style="height: 170px; width:297px; overflow:hidden;">
                        <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3"/>  
                    </div>
                    @else
                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" 
                        class="card-img-top" alt="{{ $post->category->name }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">
                            <small class="text-muted">                          
                          {{ $post->created_at->diffForHumans() }}
                            </small>
                        </p>
                        <h6 class="card-text">Rp {{ $post->price }}/{{ $post->unit }}</h6>
                        <p class="card-text">{{ $post->excerpt }}...</p>
                        <a href="#" class="btn btn-success">Order</a>
                        <a href="/posts/{{ $post->slug }}" class="btn btn-secondary">Read more</a><br>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
