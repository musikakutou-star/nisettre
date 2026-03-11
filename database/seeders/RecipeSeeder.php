<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Recipe;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    public function run(): void
    {
        // Create a few sample users if they don't exist
        $users = Recipe::count() < 3
            ? collect([
                Recipe::create([
                    'name' => '唐揚げ',
                    'cooking' => '切る、揚げる',
                    'memo' => bcrypt('下味をつける'),
                ]),
                Recipe::create([
                    'name' => '酢豚',
                    'cooking' => '切る、揚げる、炒める',
                    'memo' => bcrypt('パイナップルは入れない'),
                ]),
                Recipe::create([
                    'name' => 'フライドポテト',
                    'cooking' => '切る、揚げる',
                    'memo' => bcrypt('揚げたてに塩を振る'),
                ]),
            ])
            : Recipe::take(3)->get();

        // Sample chirps
        $chirps = [
            'Just discovered Laravel - where has this been all my life? 🚀',
            'Building something cool with Chirper today!',
            'Laravel\'s Eloquent ORM is pure magic ✨',
            'Deployed my first app with Laravel Cloud. So smooth!',
            'Who else is loving Blade components?',
            'Friday deploys with Laravel? No problem! 😎',
        ];

        // Create chirps for random users
        foreach ($chirps as $message) {
            $users->random()->chirps()->create([
                'message' => $message,
                'created_at' => now()->subMinutes(rand(5, 1440)),
            ]);
        }
    }
}
