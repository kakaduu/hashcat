<?php

use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
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
             'created_date' =>'2018-10-21 17:10:10',
        ]);
        DB::table('replies')->insert([
            'topic_id' =>'2',
            'user_id' =>'1',
            'body' => str_random(15),
             'created_date' =>'2018-10-22 18:10:10',
        ]);
        DB::table('replies')->insert([
            'topic_id' =>'1',
            'user_id' =>'3',
            'body' => str_random(15),
             'created_date' =>'2018-10-23 19:11:10',
        ]);
        DB::table('replies')->insert([
            'topic_id' =>'2',
            'user_id' =>'2',
            'body' => str_random(15),
             'created_date' =>'2018-10-24 18:12:10',
        ]);
    }
}
