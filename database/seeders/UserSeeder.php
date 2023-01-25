<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=5; $i++){
            $faker = Faker::create();
            DB::table('users')->insert([
                'id' => $faker->uuid,
                'name' => $faker->name,
                'email' => $faker->email,
                'hp' => $faker->phoneNumber,
                'password' => Hash::make('12345678'),
                'created_at' => date('Y-m-d H:i:s')
            ]);
        }
    }
}
