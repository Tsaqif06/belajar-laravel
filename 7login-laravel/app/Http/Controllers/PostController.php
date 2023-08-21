<?php

namespace App\Http\Controllers;

use \App\Models\Post;
use \App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $title = 'All Posts';
        if (request('category')) {
            $title .= ' In Category : ' . Category::firstWhere('slug', request('category'))->name;
        } else if (request('author')) {
            $title .= ' By : ' . User::firstWhere('username', request('author'))->name;
        }
        return view('posts', [
            "title" => $title,
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function detail(Post $post)
    {
        return view('post', [
            "title" => $post->title,
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
