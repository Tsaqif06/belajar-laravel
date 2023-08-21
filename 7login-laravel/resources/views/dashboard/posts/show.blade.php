@extends('dashboard.layouts.main')

@section('content')

    <article>
        <div class="container">
            <div class="row mt-4 ms-3">
                <div class="col-md-8">
                    <h1>{{ $title }}</h1>
                    <a href="/dashboard/posts" class="btn btn-warning"><i class="bi bi-backspace"></i> Back To All My Post</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-success"><i class="bi bi-pencil"></i> Edit</a>

                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger border-0" onclick="return confirm('Are You Sure?')"><i
                                class="bi bi-trash"></i> Delete</button>
                    </form>
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                        class="card-img-top mt-3 img-fluid" alt="{{ $post->category->name }}">
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
