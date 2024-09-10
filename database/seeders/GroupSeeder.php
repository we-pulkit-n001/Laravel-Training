<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Group;


class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::Create();

        for ($i = 0; $i < 10; $i++) {
            $groups = new Group;

            $groups->email = $faker->safeEmail();
            $groups->phone = $faker->phoneNumber();
            $groups->address = $faker->address();
            $groups->city = $faker->city();
            $groups->member_id = $faker->numberBetween(1, 20);
            $groups->save();
        }
    }
}
