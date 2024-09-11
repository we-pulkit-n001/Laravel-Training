<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            $comments = new Comment;
            $comments->user_id = \App\Models\User::get()->random()->id;
            $comments->post_id = \App\Models\User::get()->random()->id;
            $comments->comment_body = $faker->text();
            $comments->save();
        }
    }
}
