<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Best python sripts?',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dignissim, lectus quis tincidunt fringilla, ligula lacus fermentum metus, sed volutpat ante quam vel arcu. Praesent egestas magna urna. Ut et ornare ex. Curabitur mattis aliquet enim. Nunc vestibulum feugiat fermentum. Phasellus volutpat ipsum est, at pellentesque tellus posuere vitae. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis consequat nec turpis sed aliquet. Aenean in gravida massa. Aliquam ac euismod eros, ac elementum elit. Pellentesque pulvinar ultricies egestas. Nunc iaculis dictum euismod.',
            'image' => 'h1.jpg',
            'created_at' => now(),
            'category_id' => 3,
            'user_id' => 1,
        ]);
        DB::table('posts')->insert([
            'title' => 'How to crack passwords',
            'body' => 'Sed nec nibh congue, maximus leo at, aliquam odio. Vivamus pellentesque lectus euismod mi fringilla molestie vitae sit amet felis. Cras semper, est eget vestibulum scelerisque, lacus odio luctus mauris, non efficitur purus nulla at enim. Mauris commodo quam vitae facilisis rutrum. Nulla facilisi. Phasellus mattis at turpis non laoreet. Vivamus eget eleifend risus. Quisque posuere aliquet purus.',
            'image' => 'h2.jpg',
            'created_at' => now(),
            'category_id' => 1,
            'user_id' => 2,
        ]);
        DB::table('posts')->insert([
            'title' => 'Which GPU?',
            'body' => 'Etiam nunc neque, dapibus vel maximus laoreet, egestas ut turpis. Etiam lacinia bibendum euismod. Integer euismod porta orci ac ornare. Cras ac tristique ex. Integer ultricies nisi sem, ac luctus ligula pretium ut. Aenean fermentum magna quis augue interdum blandit. Praesent ex urna, lobortis vel orci eget, viverra efficitur nisl. Etiam faucibus elit sit amet arcu egestas eleifend. ',
            'image' => 'h3.jpg',
            'created_at' => now(),
            'category_id' => 5,
            'user_id' => 3,
        ]);
        DB::table('posts')->insert([
            'title' => 'Benchmark 500000 pw/sec',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dignissim, lectus quis tincidunt fringilla, ligula lacus fermentum metus, sed volutpat ante quam vel arcu. Praesent egestas magna urna. Ut et ornare ex. Curabitur mattis aliquet enim. Nunc vestibulum feugiat fermentum. Phasellus volutpat ipsum est, at pellentesque tellus posuere vitae. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis consequat nec turpis sed aliquet. Aenean in gravida massa. Aliquam ac euismod eros, ac elementum elit. Pellentesque pulvinar ultricies egestas. Nunc iaculis dictum euismod.',
            'image' => 'h4.jpg',
            'created_at' => now(),
            'category_id' => 2,
            'user_id' => 1,
        ]);
        DB::table('posts')->insert([
            'title' => 'Other post',
            'body' => 'Sed nec nibh congue, maximus leo at, aliquam odio. Vivamus pellentesque lectus euismod mi fringilla molestie vitae sit amet felis. Cras semper, est eget vestibulum scelerisque, lacus odio luctus mauris, non efficitur purus nulla at enim. Mauris commodo quam vitae facilisis rutrum. Nulla facilisi. Phasellus mattis at turpis non laoreet. Vivamus eget eleifend risus. Quisque posuere aliquet purus.',
            'image' => 'h5.png',
            'created_at' => now(),
            'category_id' => 6,
            'user_id' => 2,
        ]);
        DB::table('posts')->insert([
            'title' => 'Sript to crack OneNote?',
            'body' => 'Etiam nunc neque, dapibus vel maximus laoreet, egestas ut turpis. Etiam lacinia bibendum euismod. Integer euismod porta orci ac ornare. Cras ac tristique ex. Integer ultricies nisi sem, ac luctus ligula pretium ut. Aenean fermentum magna quis augue interdum blandit. Praesent ex urna, lobortis vel orci eget, viverra efficitur nisl. Etiam faucibus elit sit amet arcu egestas eleifend. ',
            'image' => 'h6.jpg',
            'created_at' => now(),
            'category_id' => 3,
            'user_id' => 4,
        ]);
        DB::table('posts')->insert([
            'title' => 'Other post',
            'body' => 'Sed nec nibh congue, maximus leo at, aliquam odio. Vivamus pellentesque lectus euismod mi fringilla molestie vitae sit amet felis. Cras semper, est eget vestibulum scelerisque, lacus odio luctus mauris, non efficitur purus nulla at enim. Mauris commodo quam vitae facilisis rutrum. Nulla facilisi. Phasellus mattis at turpis non laoreet. Vivamus eget eleifend risus. Quisque posuere aliquet purus.',
            'image' => 'h7.jpg',
            'created_at' => now(),
            'category_id' => 6,
            'user_id' => 2,
        ]);
        DB::table('posts')->insert([
            'title' => 'Server Hosting...?',
            'body' => 'Etiam nunc neque, dapibus vel maximus laoreet, egestas ut turpis. Etiam lacinia bibendum euismod. Integer euismod porta orci ac ornare. Cras ac tristique ex. Integer ultricies nisi sem, ac luctus ligula pretium ut. Aenean fermentum magna quis augue interdum blandit. Praesent ex urna, lobortis vel orci eget, viverra efficitur nisl. Etiam faucibus elit sit amet arcu egestas eleifend. ',
            'image' => 'h8.jpg',
            'created_at' => now(),
            'category_id' => 4,
            'user_id' => 3,
        ]);
        DB::table('posts')->insert([
            'title' => 'CPU i7 or XEON?',
            'body' => 'Etiam nunc neque, dapibus vel maximus laoreet, egestas ut turpis. Etiam lacinia bibendum euismod. Integer euismod porta orci ac ornare. Cras ac tristique ex. Integer ultricies nisi sem, ac luctus ligula pretium ut. Aenean fermentum magna quis augue interdum blandit. Praesent ex urna, lobortis vel orci eget, viverra efficitur nisl. Etiam faucibus elit sit amet arcu egestas eleifend. ',
            'image' => 'h9.jpg',
            'created_at' => now(),
            'category_id' => 5,
            'user_id' => 3,
        ]);

    }
}
