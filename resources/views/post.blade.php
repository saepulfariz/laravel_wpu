@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <h1 class="mb-5">
            {{ $post->title }}
        </h1>
        {!! $post->body !!}
    </article>
    <a href="/posts">Back to posts</a>
@endsection
