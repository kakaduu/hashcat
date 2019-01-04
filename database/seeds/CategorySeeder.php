<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
            'description' => 'Tutorials'
        ]);
        DB::table('categories')->insert([
            'name' => 'Benchmarks',
            'description' =>'Best Benchmarks'
        ]);
        DB::table('categories')->insert([
            'name' => 'Python scripts',
            'description' =>'Sripts, scripts, scripts'
        ]);
        DB::table('categories')->insert([
            'name' => 'Web&Hosting',
            'description' =>'Best Hosting providers ecs'
        ]);
        DB::table('categories')->insert([
            'name' => 'Hardware',
            'description' =>'CPU, GPU ...'
        ]);
        DB::table('categories')->insert([
            'name' => 'Other',
            'description' =>'Other'
        ]);
    }
}
