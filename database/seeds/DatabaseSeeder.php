<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PostsTableSeeder::class);
        //$this->call(RepliesSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(CommentsSeeder::class);
    }
}
