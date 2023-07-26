@extends('layouts.main')
@section('content')
    @foreach ($posts as $post)
        <article class="mb-5">
            <h1>
                <a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a>
            </h1>
            <h6>By: {{ $post['author'] }}</h6>
            <p>{{ $post['body'] }}</p>
        </article>
    @endforeach
@stop
