<?php

namespace App\Models;

class Post
{
    private static $blog_posts =
    [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        return static::all()->firstWhere('slug', $slug);
    }
}
