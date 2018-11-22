<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'title' => 'Using Hashcat',
            'body' =>'It is very simple',
            'pic' =>'pic1.jpg',
            'user_id' =>'1',
            'created_date' =>'2018-10-20 15:10:10',
        ]);
        DB::table('news')->insert([
            'title' => 'Using Hashcat2',
            'body' => str_random(25),
            'pic' =>'pic2.jpg',
            'user_id' =>'1',
            'created_date' =>'2018-10-20 15:10:10',
        ]);
        DB::table('news')->insert([
            'title' => 'Using Hashcat3333',
            'body' => str_random(30),
            'pic' =>'pic3.jpg',
            'user_id' =>'2',
            'created_date' =>'2018-10-20 15:10:10',
        ]);
    }
}
