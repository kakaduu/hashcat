<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Tutorials',
            'description' =>'Tutorials'
        ]);
        DB::table('categories')->insert([
            'name' => 'Benchmarks',
            'description' =>'Bookmarks'
        ]);
        DB::table('categories')->insert([
            'name' => 'Python scripts',
            'description' =>'Sripts.....'
        ]);
        DB::table('categories')->insert([
            'name' => 'Web&Hosting',
            'description' =>'Best Hosting providers ecs'
        ]);
        DB::table('categories')->insert([
            'name' => 'Other',
            'description' =>'Other'
        ]);

    }
}
