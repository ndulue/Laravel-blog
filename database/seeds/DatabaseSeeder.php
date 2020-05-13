<?php

use App\Post;
use App\User;
use App\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(Post::class, 10)->create();
        factory(Category::class, 10)->create();
        factory(User::class, 10)->create();

    }
}
