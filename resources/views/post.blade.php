@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <h1 class="mb-5">
            {{ $post->title }}
        </h1>

        <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a class="text-decoration-none"
                href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>
    <a href="/posts" class="d-block mt-3 text-decoration-none">Back to posts</a>
@endsection
