<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'guku' ,
            'email' => 'guku@gmail.com',
            'password' => bcrypt('secret'),
            'avatar' => 'a1.jpg',
        ]);
        DB::table('users')->insert([
            'name' => 'kroll',
            'email' => 'kroll@gmail.com',
            'password' => bcrypt('secret'),
            'avatar' => 'a2.jpg',
        ]);
        DB::table('users')->insert([
            'name' => 'aloha77',
            'email' => 'aloha@gmail.com',
            'password' => bcrypt('secret'),
            'avatar' => 'a3.png',
        ]);
        DB::table('users')->insert([
            'name' => 'karl88',
            'email' => 'karla@gmail.com',
            'password' => bcrypt('123456'),
            'avatar' => 'a4.png',
        ]);
    }
}
