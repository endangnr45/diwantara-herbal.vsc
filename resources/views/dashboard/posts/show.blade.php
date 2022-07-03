@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row ">
        <div class="col-lg-8">
            <article>
                <h2>{{ $post->title }}</h2>
                <h5>{{ $post->name }}</h5>
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left">
                    </span>Back to all post</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit-2"></span>Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                  <button class="btn btn-danger border-0" onclick="return confirm('Are you sure you want to delete this?')">
                    <span data-feather="x-circle"></span> Delete</button>
                </form>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" 
                alt="{{ $post->category->name }}" class="img-fluid mt-3"/>

                <article class="my-3">
                {!! $post->body !!}
                </article>
            </article>
        </div>
    </div>
</div>
@endsection