<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('categories', [
            'title' => 'All Post Categories',
            'active' => 'categories',
            'categories' => Category::all()
        ]);
    }
}
