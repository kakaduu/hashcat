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
            'name' => 'Hashcat Linux' 
        ]); 
        DB::table('categories')->insert([ 
            'name' => 'Hashcat Windows' 
        ]); 
        DB::table('categories')->insert([ 
            'name' => 'Database' 
        ]); 
        DB::table('categories')->insert([ 
            'name' => 'Programming' 
        ]); 
        DB::table('categories')->insert([ 
            'name' => 'Web' 
        ]); 

    }
}
