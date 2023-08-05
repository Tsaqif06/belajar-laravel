@extends('layouts.main')


@section('content')
    <article>
        <h1>{{ $post->title }}</h1>
        <h5>By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a></h5>
            <a href="/categories/{{ $post->category->slug }}"><span
                    class="badge text-bg-primary">{{ $post->category->name }}</span></a> <br>
            {!! $post->body !!}
    </article>

    <a href="/posts">Back</a>
@stop
