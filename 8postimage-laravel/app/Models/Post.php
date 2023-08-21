<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];
    protected $with = ['category', 'author'];
    // protected $fillable = [
    //     'title',
    //     'categoryId',
    //     'user_id',
    //     'slug',
    //     'author',
    //     'excerpt',
    //     'body'
    // ];

    public function scopeFilter($query, array $filters)
    {
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //         ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        $query->when(
            $filters['search'] ?? false,
            fn ($query, $search) =>
            $query->where('title', 'like', "%$search%")
                ->orWhere('body', 'like', "%$search%")
        )->when($filters['category'] ?? false, fn ($query, $category) =>
        $query->whereHas(
            'category',
            fn ($query) =>
            $query->where('slug', $category)
        ))->when($filters['author'] ?? false, fn ($query, $author) =>
        $query->whereHas(
            'author',
            fn ($query) =>
            $query->where('username', $author)
        ));
        // $query->when(
        //     $filters['search'] ?? false,
        //     fn ($query, $search) =>
        //     $query->where('title', 'like', "%$search%")
        //         ->orWhere('body', 'like', "%$search%")
        // );

        // $query->when($filters['category'] ?? false, fn ($query, $category) =>
        //     $query->whereHas(
        //         'category',
        //         function ($query) use ($category) {
        //             $query->where('slug', $category);
        //         }
        // ));
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
