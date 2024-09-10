<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::Create();
        for ($i = 0; $i < 10; $i++) {
            $members = new Member;
            $members->name = $faker->name;
            $members->age = $faker->numberBetween(18, 99);
            $members->gender = $faker->randomElement(['male', 'female']);
            $members->save();
        }
    }
}
