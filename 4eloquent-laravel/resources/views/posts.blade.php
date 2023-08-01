@extends('layouts.main')
@section('content')
    <h5>All Posts</h5>
    @foreach ($posts as $post)
        <article class="mb-5">
            <h1>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h1>
            <h6>By: {{ $post->author }}</h6>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@stop

