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
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Add specific users first
        DB::table('users')->insert([
            [
                'name' => 'Ali Tahir',
                'phone' => '03097380725',
                'password' => Hash::make($faker->numerify('######')), // Random 6-digit password
                'status' => 'active', // Default status
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Asad',
                'phone' => '03044549529',
                'password' => Hash::make($faker->numerify('######')), // Random 6-digit password
                'status' => 'active', // Default status
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Generate 10 random users
        foreach (range(1, 10) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name(),
                'phone' => $faker->unique()->numerify('###########'), // Generates a 10-digit unique phone number
                'password' => Hash::make($faker->numerify('######')), // Generates a random 6-digit password and hashes it
                'status' => $faker->randomElement(['active', 'inactive', 'banned']), // Example statuses
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
