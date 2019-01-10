<?php

use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'post_id' =>'1',
            'user_id' =>'1',
            'created_at' => now(),
            'body' => str_random(20),
        ]);
        DB::table('comments')->insert([
            'post_id' =>'2',
            'user_id' =>'2',
            'parent_id' =>null,
            'body' => str_random(20),
            'created_at' => now(),
        ]);
        DB::table('comments')->insert([
            'post_id' =>'2',
            'user_id' =>'3',
            'parent_id' =>1,
            'body' => str_random(20),
            'created_at' => now(),
        ]);
    }
}
