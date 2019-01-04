<?php

use Illuminate\Database\Seeder;

class RepliesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('replies')->insert([
            'topic_id' =>'1',
            'user_id' =>'1',
            'body' => str_random(15),
             ]);
        DB::table('replies')->insert([
            'topic_id' =>'2',
            'user_id' =>'1',
            'body' => str_random(15), 
        ]);
        DB::table('replies')->insert([
            'topic_id' =>'1',
            'user_id' =>'3',
            'body' => str_random(15),
        ]);
        DB::table('replies')->insert([
            'topic_id' =>'2',
            'user_id' =>'2',
            'body' => str_random(15),
        ]);
    }
}
