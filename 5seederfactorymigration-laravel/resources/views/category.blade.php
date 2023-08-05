@extends('layouts.main')
@section('content')

    <h5>Post Category : {{ $category }}</h5>
    @foreach ($posts as $post)
        <article class="mb-5">
            <h1>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h1>
            <h5>By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
            </h5>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@stop
