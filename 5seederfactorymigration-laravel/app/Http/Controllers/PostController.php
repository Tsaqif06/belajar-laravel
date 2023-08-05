<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;
use \App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Posts",
            // "posts" => Post::all()
            "posts" => Post::latest()->get()
        ]);
    }

    public function detail(Post $post)
    {
        return view('post', [
            "title" => $post->title,
            "post" => $post
        ]);
    }

    public function authors(User $author)
    {
        return view('posts', [
            "title" => $author->name,
            "posts" => $author->posts
        ]);
    }
}
