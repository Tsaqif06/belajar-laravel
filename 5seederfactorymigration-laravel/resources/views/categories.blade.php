@extends('layouts.main')
@section('content')
    <h5>All Categories</h5>
    <ul>
        @foreach ($categories as $category)
            <li>
                <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul>
@stop
