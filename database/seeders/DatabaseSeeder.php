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
     *
     * @return void
     */
    public function run()
    {
        User::factory(4)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Alfath Izha',
            'username' => 'alfath',
            'email' => 'alfath@gmail.com',
            'password' => bcrypt('12345'),
            'is_admin' => true,
        ]);

    //     User::create([
    //         'name' => 'Person Two',
    //         'email' => 'persontwo@gmail.com',
    //         'password' => bcrypt('12345')
    //     ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

    //     Post::create([
    //         'title' => 'Judul Pertama',
    //         'slug' => 'judul-pertama',
    //         'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis, magni?',
    //         'body' => '    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus iure harum aperiam facere odit, consectetur quod! Error doloremque deleniti ullam. Lorem ipsum, dolor sit amet consectetur adipisicing elit. In aliquid aperiam sapiente voluptate. Molestiae, dolorem repudiandae magnam placeat nam sit officia minima quam inventore alias labore neque corporis ullam quod laudantium vel veniam, consequatur incidunt rerum reiciendis temporibus enim! Facilis voluptate nulla tenetur! Enim.',
    //         'category_id' => 1,
    //         'user_id' => 1
    //     ]);

    //     Post::create([
    //         'title' => 'Judul Kedua',
    //         'slug' => 'judul-kedua',
    //         'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis, magni?',
    //         'body' => '    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus iure harum aperiam facere odit, consectetur quod! Error doloremque deleniti ullam. Lorem ipsum, dolor sit amet consectetur adipisicing elit. In aliquid aperiam sapiente voluptate. Molestiae, dolorem repudiandae magnam placeat nam sit officia minima quam inventore alias labore neque corporis ullam quod laudantium vel veniam, consequatur incidunt rerum reiciendis temporibus enim! Facilis voluptate nulla tenetur! Enim.',
    //         'category_id' => 1,
    //         'user_id' => 1
    //     ]);

    //     Post::create([
    //         'title' => 'Judul KeTiga',
    //         'slug' => 'judul-ketiga',
    //         'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis, magni?',
    //         'body' => '    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus iure harum aperiam facere odit, consectetur quod! Error doloremque deleniti ullam. Lorem ipsum, dolor sit amet consectetur adipisicing elit. In aliquid aperiam sapiente voluptate. Molestiae, dolorem repudiandae magnam placeat nam sit officia minima quam inventore alias labore neque corporis ullam quod laudantium vel veniam, consequatur incidunt rerum reiciendis temporibus enim! Facilis voluptate nulla tenetur! Enim.',
    //         'category_id' => 2,
    //         'user_id' => 1
    //     ]);

    //     Post::create([
    //         'title' => 'Judul Keempat',
    //         'slug' => 'judul-keempat',
    //         'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis, magni?',
    //         'body' => '    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus iure harum aperiam facere odit, consectetur quod! Error doloremque deleniti ullam. Lorem ipsum, dolor sit amet consectetur adipisicing elit. In aliquid aperiam sapiente voluptate. Molestiae, dolorem repudiandae magnam placeat nam sit officia minima quam inventore alias labore neque corporis ullam quod laudantium vel veniam, consequatur incidunt rerum reiciendis temporibus enim! Facilis voluptate nulla tenetur! Enim.',
    //         'category_id' => 2,
    //         'user_id' => 2
    //     ]);

     }
}
