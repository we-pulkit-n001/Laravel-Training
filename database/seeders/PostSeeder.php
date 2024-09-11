<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            $posts = new Post;
            $posts->title = $faker->name(5);
            $posts->slug = $faker->text(10);
            $posts->description = $faker->paragraph(2, true);
            $posts->user_id = \App\Models\User::get()->random()->id;
            $posts->save();
        }
    }
}
