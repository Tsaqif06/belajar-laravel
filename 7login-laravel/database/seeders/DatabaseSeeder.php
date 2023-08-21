<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'Web Design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Post::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Tsaqif',
        //     'email' => 'tsaqif@gmail.com',
        //     'password' => bcrypt('tsaqif123')
        // ]);

        // User::create([
        //     'name' => 'Naufal',
        //     'email' => 'naufal@gmail.com',
        //     'password' => bcrypt('naufal123')
        // ]);

        // User::create([
        //     'name' => 'Nauqif',
        //     'email' => 'nauqif@gmail.com',
        //     'password' => bcrypt('nauqif123')
        // ]);

        // Post::create([
        //     'title' => 'First Post',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'first-post',
        //     'excerpt' => 'Loam hic magni nihil dolorem maiores error vitae assumenda. Amet.',
        //     'body' => '<p>Loam. Nostrum est at saepe in debitis cum voluptates reprehenderit maxime fugit totam, nemo esse, eaque eum magni vero voluptas voluptatum.</p> <p>Officiis ex a explicabo ab magni porro tempora provident dicta, impedit, amet hic similique tenetur tempore cumque? Eligendi praesentium sit tenetur, ducimus consequuntur velit, suscipit error corporis commodi culpa soluta unde quam quaerat odit incidunt laboriosam minus?</p> <p>Sint, expedita libero commodi inventore sequi impedit provident cum saepe, error maxime voluptates ex omnis eaque! Natus nesciunt molestias officiis consequatur! Id, possimus molestias! Doloribus porro similique, qui vero itaque quisquam doloremque eligendi blanditiis voluptates aliquam magnam eaque officiis sed dignissimos unde aliquid fugiat asperiores quis sit veniam in expedita nisi aperiam? Perspiciatis, delectus esse!</p>'
        // ]);

        // Post::create([
        //     'title' => 'Second Post',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'slug' => 'second-post',
        //     'excerpt' => 'Loam hic magni nihil dolorem maiores error vitae assumenda. Amet.',
        //     'body' => '<p>Loam. Nostrum est at saepe in debitis cum voluptates reprehenderit maxime fugit totam, nemo esse, eaque eum magni vero voluptas voluptatum.</p> <p>Officiis ex a explicabo ab magni porro tempora provident dicta, impedit, amet hic similique tenetur tempore cumque? Eligendi praesentium sit tenetur, ducimus consequuntur velit, suscipit error corporis commodi culpa soluta unde quam quaerat odit incidunt laboriosam minus?</p> <p>Sint, expedita libero commodi inventore sequi impedit provident cum saepe, error maxime voluptates ex omnis eaque! Natus nesciunt molestias officiis consequatur! Id, possimus molestias! Doloribus porro similique, qui vero itaque quisquam doloremque eligendi blanditiis voluptates aliquam magnam eaque officiis sed dignissimos unde aliquid fugiat asperiores quis sit veniam in expedita nisi aperiam? Perspiciatis, delectus esse!</p>'
        // ]);

        // Post::create([
        //     'title' => 'Third Post',
        //     'category_id' => 3,
        //     'user_id' => 3,
        //     'slug' => 'third-post',
        //     'excerpt' => 'Loam hic magni nihil dolorem maiores error vitae assumenda. Amet.',
        //     'body' => '<p>Loam. Nostrum est at saepe in debitis cum voluptates reprehenderit maxime fugit totam, nemo esse, eaque eum magni vero voluptas voluptatum.</p> <p>Officiis ex a explicabo ab magni porro tempora provident dicta, impedit, amet hic similique tenetur tempore cumque? Eligendi praesentium sit tenetur, ducimus consequuntur velit, suscipit error corporis commodi culpa soluta unde quam quaerat odit incidunt laboriosam minus?</p> <p>Sint, expedita libero commodi inventore sequi impedit provident cum saepe, error maxime voluptates ex omnis eaque! Natus nesciunt molestias officiis consequatur! Id, possimus molestias! Doloribus porro similique, qui vero itaque quisquam doloremque eligendi blanditiis voluptates aliquam magnam eaque officiis sed dignissimos unde aliquid fugiat asperiores quis sit veniam in expedita nisi aperiam? Perspiciatis, delectus esse!</p>'
        // ]);

        // Post::create([
        //     'title' => 'Fourth Post',
        //     'category_id' => 2,
        //     'user_id' => 3,
        //     'slug' => 'fourth-post',
        //     'excerpt' => 'Loam hic magni nihil dolorem maiores error vitae assumenda. Amet.',
        //     'body' => '<p>Loam. Nostrum est at saepe in debitis cum voluptates reprehenderit maxime fugit totam, nemo esse, eaque eum magni vero voluptas voluptatum.</p> <p>Officiis ex a explicabo ab magni porro tempora provident dicta, impedit, amet hic similique tenetur tempore cumque? Eligendi praesentium sit tenetur, ducimus consequuntur velit, suscipit error corporis commodi culpa soluta unde quam quaerat odit incidunt laboriosam minus?</p> <p>Sint, expedita libero commodi inventore sequi impedit provident cum saepe, error maxime voluptates ex omnis eaque! Natus nesciunt molestias officiis consequatur! Id, possimus molestias! Doloribus porro similique, qui vero itaque quisquam doloremque eligendi blanditiis voluptates aliquam magnam eaque officiis sed dignissimos unde aliquid fugiat asperiores quis sit veniam in expedita nisi aperiam? Perspiciatis, delectus esse!</p>'
        // ]);
    }
}
