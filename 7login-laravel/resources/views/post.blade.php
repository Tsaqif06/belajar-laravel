@extends('layouts.main')


@section('content')
    <article>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h1>{{ $title }}</h1>
                    <h5>By <a href="/posts?author={{ $post->author->username }}"
                            class="text-decoration-none">{{ $post->author->name }}</a>
                    </h5>
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top img-fluid"
                        alt="{{ $post->category->name }}">
                    <a href="/posts?category={{ $post->category->slug }}"><span
                            class="badge text-bg-primary">{{ $post->category->name }}</span></a> <br>
                    <article class="my-3">
                        {!! $post->body !!}
                    </article>
                    <a href="/posts">Back</a><br><br>
                </div>
            </div>
        </div>
    </article>

@stop
