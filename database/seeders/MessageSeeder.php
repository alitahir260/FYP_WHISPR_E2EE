<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Define user IDs range (1 to 12)
        $userIds = range(1, 12);

        // Generate random messages
        for ($i = 0; $i < 200; $i++) { // 200 random messages
            // Randomly select sender and receiver (ensure they're different)
            $senderId = $faker->randomElement($userIds);
            $receiverId = $faker->randomElement(array_filter($userIds, fn($id) => $id != $senderId));

            Message::create([
                'sender_id' => $senderId,
                'receiver_id' => $receiverId,
                'message' => $faker->sentence($faker->numberBetween(5, 15)), // Random sentence (5-15 words)
                'is_read' => $faker->boolean(70), // 70% chance the message is read
                'created_at' => $faker->dateTimeBetween('-30 days', 'now'),
                'updated_at' => now(),
            ]);
        }

        echo "200 random messages seeded successfully!\n";
    }
}
