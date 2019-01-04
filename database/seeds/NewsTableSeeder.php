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
            'title' => 'Using Hashcat is very simple',
            'body' => 'Nam vel malesuada libero. Donec pharetra sit amet nunc at maximus. Suspendisse erat arcu, ultrices in dui ut, ultricies faucibus felis. Cras aliquet nulla sed leo finibus, in tincidunt nulla egestas. Morbi lobortis eu sem ut consectetur. Vestibulum ac lobortis ex. Mauris eget risus sed ex aliquam gravida.',
            'image' => 'news0.jpg',
            'created_at' => now(),
        ]);
        DB::table('news')->insert([
            'title' => 'Crack Passwords',
            'body' => 'Donec pharetra sit amet nunc at maximus. Suspendisse erat arcu, ultrices in dui ut, ultricies faucibus felis. Cras aliquet nulla sed leo finibus, in tincidunt nulla egestas. Morbi lobortis eu sem ut consectetur. Vestibulum ac lobortis ex. Mauris eget risus sed ex aliquam gravida.',
            'image' => 'news1.jpg',
            'created_at' => now(),
        ]);
        DB::table('news')->insert([
            'title' => 'New NVIDIA GPU 25 million CORE',
            'body' => 'Suspendisse erat arcu, ultrices in dui ut, ultricies faucibus felis. Nam vel malesuada libero. Donec pharetra sit amet nunc at maximus.  Cras aliquet nulla sed leo finibus, in tincidunt nulla egestas. Morbi lobortis eu sem ut consectetur. Vestibulum ac lobortis ex. Mauris eget risus sed ex aliquam gravida.',
            'image' => 'news2.jpg',
            'created_at' => now(),
        ]);
        DB::table('news')->insert([
            'title' => 'John the RIPPER wordlist',
            'body' => 'Mauris eget risus sed ex aliquam gravida. Nam vel malesuada libero. Donec pharetra sit amet nunc at maximus. Suspendisse erat arcu, ultrices in dui ut, ultricies faucibus felis. Cras aliquet nulla sed leo finibus, in tincidunt nulla egestas. Morbi lobortis eu sem ut consectetur. Vestibulum ac lobortis ex. ',
            'image' => 'news3.png',
            'created_at' => now(),
        ]);
        DB::table('news')->insert([
            'title' => 'Install Hashcat on UBUNTU',
            'body' => 'Uspendisse erat arcu, ultrices in dui ut, ultricies faucibus felis. Nam vel malesuada libero. Donec pharetra sit amet nunc at maximus. S Cras aliquet nulla sed leo finibus, in tincidunt nulla egestas. Morbi lobortis eu sem ut consectetur. Vestibulum ac lobortis ex. Mauris eget risus sed ex aliquam gravida.',
            'image' => 'news4.jpg',
            'created_at' => now(),
        ]);
    }
}
