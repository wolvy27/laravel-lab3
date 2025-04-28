<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Post;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 5 authors
        Author::factory(5)->create()->each(function ($author) {
            // For each author, create 3-5 posts
            Post::factory(random_int(3, 5))->create([
                'author_id' => $author->id,
            ])->each(function ($post) {
                // For each post, create 2-4 comments
                Comment::factory(random_int(2, 4))->create([
                    'post_id' => $post->id,
                ]);
            });
        });
    }
}
