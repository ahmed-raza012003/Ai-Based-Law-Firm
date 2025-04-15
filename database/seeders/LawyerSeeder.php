<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Lawyer;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;

class LawyerSeeder extends Seeder
{
    public function run()
    {
        $categories = Category::all();

        for ($i = 1; $i <= 5; $i++) {
            // Create user for lawyer
            $user = User::create([
                'name' => 'Lawyer ' . $i,
                'email' => 'lawyer' . $i . '@example.com',
                'password' => Hash::make('password'),
                'phone_number' => '0300' . rand(1000000, 9999999),
                // If you're using roles table
                // 'role' => 'lawyer'
            ]);

            // Create lawyer profile
            $lawyer = Lawyer::create([
                'user_id' => $user->id,
                'address' => fake()->address(),
                'city' => fake()->city(),
                'status' => fake()->randomElement(['available', 'busy']),
            ]);

            // Attach 1 to 3 random categories
            $lawyer->categories()->attach(
                $categories->random(rand(1, 3))->pluck('id')->toArray()
            );
        }
    }
}
