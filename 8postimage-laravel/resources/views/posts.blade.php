@extends('layouts.main')
@section('content')
    <h1 class="text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-5">
        <div class="col-md-6">
            <form action="/posts" method="get">
                @if (request('category'))
                    <input type="hidden" name="category" id="category" value="{{ request('category') }}">
                @elseif (request('author'))
                    <input type="hidden" name="author" id="author" value="{{ request('author') }}">
                @endif

                <div class="input-group mb-3">
                    <input type="text" name="search" class="form-control" value="{{ request('search') }}"
                        placeholder="Search Post Here..." aria-label="Search Post Here..." aria-describedby="basic-addon2">
                    <button class="input-group-text btn btn-primary" type="submit" id="basic-addon2"><i
                            class="bi bi-search"></i></button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3 text-center">
            @if ($posts[0]->image)
                <div style="max-height: 350px; overflow: hidden">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top mt-3 img-fluid"
                        alt="{{ $posts[0]->category->name }}">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}"
                    class="card-img-top mt-3 img-fluid" alt="{{ $posts[0]->category->name }}">
            @endif
            <div class="card-body">
                <a class="text-decoration-none text-dark" href="/posts/{{ $posts[0]->slug }}">
                    <h5 class="card-title">{{ $posts[0]->title }}</h5>
                </a>
                <small class="text-body-secondary">
                    <p class="card-text">By <a href="/posts?author={{ $posts[0]->author->username }}"
                            class="text-decoration-none">{{ $posts[0]->author->name }}</a>
                        at {{ $posts[0]->created_at->diffForHumans() }}
                    </p>
                </small>
                <a class="text-decoration-none" href="/posts?category={{ $posts[0]->category->slug }}"><span
                        class="badge text-bg-primary">{{ $posts[0]->category->name }}</span></a>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div>
                                <a class="text-decoration-none position-absolute ms-2"
                                    href="/posts?category={{ $post->category->slug }}"><span
                                        class="badge text-bg-primary">{{ $post->category->name }}</span></a>
                            </div>

                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid"
                                    alt="{{ $post->category->name }}">
                            @else
                                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                    class="card-img-top" alt="{{ $post->category->name }}">
                            @endif

                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <small class="text-body-secondary">
                                    <p class="card-text">By <a href="/posts?author={{ $post->author->username }}"
                                            class="text-decoration-none">{{ $post->author->name }}</a>
                                        at {{ $posts[0]->created_at->diffForHumans() }}
                                    </p>
                                </small>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No Post Found</p>
    @endif

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
@stop
