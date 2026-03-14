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
        Recipe::create([
            'name' => '唐揚げ',
            'cooking' => '切る、揚げる',
            'memo' => '下味をつける',
        ]);
        Recipe::create([
            'name' => '酢豚',
            'cooking' => '切る、揚げる、炒める',
            'memo' => 'パイナップルは入れない',
        ]);
        Recipe::create([
            'name' => 'フライドポテト',
            'cooking' => '切る、揚げる',
            'memo' => '揚げたてに塩を振る',
        ]);
        Recipe::create([
            'name' => '肉じゃが',
            'cooking' => '切る、炒める、煮る',
            'memo' => '混ぜすぎない',
        ]);
    }
}
