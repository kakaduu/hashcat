<?php

use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topics')->insert([
            'category_id' =>'1',
            'user_id' =>'1',
            'title' => 'Using Hashcat',
            'body' => str_random(15),
            'last_activity' =>'2018-11-18 15:10:10',
            'created_date' =>'2018-10-20 15:10:10',
        ]);
        DB::table('topics')->insert([
            'category_id' =>'3',
            'user_id' =>'2',
            'title' => 'Best python scripts',
            'body' => str_random(15),
            'last_activity' =>'2018-11-22 15:10:10',
            'created_date' =>'2018-10-21 15:10:10',
        ]);
        DB::table('topics')->insert([
            'category_id' =>'2',
            'user_id' =>'1',
            'title' => 'Benchmark 100000',
            'body' =>'Dorem lipsum fafafaa',
            'last_activity' =>'2018-11-18 15:10:10',
            'created_date' =>'2018-10-20 15:10:10',
        ]);
    }
}
