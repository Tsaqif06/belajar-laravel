<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Ahmad Tsaqif",
        "email" => "tsaqifcakep87@gmail.com",
        "image" => "profile.png"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "First Post",
            "slug" => "first-post",
            "author" => "Tsaqif",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut tellus tempus, faucibus enim tempus, maximus magna. Vivamus id cursus nibh, id malesuada quam. Cras venenatis, justo ornare sollicitudin fringilla, ante arcu consectetur leo, et cursus mi purus at nibh. Maecenas egestas odio quis sem tristique dignissim. Nunc venenatis aliquam tristique. Duis dolor lorem, accumsan vitae laoreet ut, suscipit non odio. Proin sed aliquet tellus. Nunc aliquet vitae neque sed congue. Nunc porta, lectus ac semper aliquam, ante tortor rutrum nulla, in rutrum felis purus nec eros. Sed tincidunt elementum nisi, ut varius libero tincidunt a. Etiam interdum est nisi, a ultricies tellus ullamcorper non. Mauris aliquet justo quis neque facilisis vestibulum. Maecenas efficitur erat nisi, ac porttitor sapien pellentesque id. Nulla iaculis massa vitae scelerisque pellentesque. Pellentesque tellus quam, facilisis at aliquet sit amet, posuere sit amet ante."
        ],
        [
            "title" => "Second Post",
            "slug" => "second-post",
            "author" => "Naufal",
            "body" => "ut tellus tempus, faucibus enim tempus, maximus magna. Vivamus id cursus nibh, id malesuada quam. Cras venenatis, justo ornare sollicitudin fringilla, ante arcu consectetur leo, et cursus mi purus at nibh. Maecenas egestas odio quis sem tristique dignissim. Nunc venenatis aliquam tristique. Duis dolor lorem, accumsan vitae laoreet ut, suscipit non odio. Proin sed aliquet tellus. Nunc aliquet vitae neque sed congue. Nunc porta, lectus ac semper aliquam, ante tortor rutrum nulla, in rutrum felis purus nec eros. Sed tincidunt elementum nisi, ut varius libero tincidunt a. Etiam interdum est nisi, a ultricies tellus ullamcorper non. Mauris aliquet justo quis neque facilisis vestibulum. Maecenas efficitur erat nisi, ac porttitor sapien pellentesque id. Nulla iaculis massa vitae scelerisque pellentesque. Pellentesque tellus quam, facilisis at aliquet sit amet, posuere sit amet ante."
        ]
    ];

    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});

// Halaman Single Post
Route::get('/posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "First Post",
            "slug" => "first-post",
            "author" => "Tsaqif",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut tellus tempus, faucibus enim tempus, maximus magna. Vivamus id cursus nibh, id malesuada quam. Cras venenatis, justo ornare sollicitudin fringilla, ante arcu consectetur leo, et cursus mi purus at nibh. Maecenas egestas odio quis sem tristique dignissim. Nunc venenatis aliquam tristique. Duis dolor lorem, accumsan vitae laoreet ut, suscipit non odio. Proin sed aliquet tellus. Nunc aliquet vitae neque sed congue. Nunc porta, lectus ac semper aliquam, ante tortor rutrum nulla, in rutrum felis purus nec eros. Sed tincidunt elementum nisi, ut varius libero tincidunt a. Etiam interdum est nisi, a ultricies tellus ullamcorper non. Mauris aliquet justo quis neque facilisis vestibulum. Maecenas efficitur erat nisi, ac porttitor sapien pellentesque id. Nulla iaculis massa vitae scelerisque pellentesque. Pellentesque tellus quam, facilisis at aliquet sit amet, posuere sit amet ante."
        ],
        [
            "title" => "Second Post",
            "slug" => "second-post",
            "author" => "Naufal",
            "body" => "ut tellus tempus, faucibus enim tempus, maximus magna. Vivamus id cursus nibh, id malesuada quam. Cras venenatis, justo ornare sollicitudin fringilla, ante arcu consectetur leo, et cursus mi purus at nibh. Maecenas egestas odio quis sem tristique dignissim. Nunc venenatis aliquam tristique. Duis dolor lorem, accumsan vitae laoreet ut, suscipit non odio. Proin sed aliquet tellus. Nunc aliquet vitae neque sed congue. Nunc porta, lectus ac semper aliquam, ante tortor rutrum nulla, in rutrum felis purus nec eros. Sed tincidunt elementum nisi, ut varius libero tincidunt a. Etiam interdum est nisi, a ultricies tellus ullamcorper non. Mauris aliquet justo quis neque facilisis vestibulum. Maecenas efficitur erat nisi, ac porttitor sapien pellentesque id. Nulla iaculis massa vitae scelerisque pellentesque. Pellentesque tellus quam, facilisis at aliquet sit amet, posuere sit amet ante."
        ]
    ];

    $single_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $single_post = $post;
        }
    }

    return view('post', [
        "title" => "{$slug}",
        "post" => $single_post
    ]);
});
