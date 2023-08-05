@extends('layouts.main')
@section('content')
    <h5>All Posts</h5>
    @foreach ($posts as $post)
        <article class="mb-5 pb-5 border-bottom">
            <h1>
                <a class="text-decoration-none" href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h1>
            <h5>By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
            </h5>
            <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}"><span
                    class="badge text-bg-primary">{{ $post->category->name }}</span></a>
            <p>{{ $post->excerpt }}</p>

            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More...</a>
        </article>
    @endforeach
@stop
