<?php

namespace Database\Seeders;

use App\Models\Achievement;
use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    protected array $achievements = [
        'Comment' => [
            1 => 'First Comment Written',
            3 => '3 Comments Written',
            5 => '5 Comments Written',
            10 => '10 Comments Written',
            20 => '20 Comments Written',
        ],
        'Lesson' => [
            1 => 'First Lesson Watched',
            5 => '5 Lessons Watched',
            10 => '10 Lessons Watched',
            25 => '25 Lessons Watched',
            50 => '50 Lessons Watched',
        ],
    ];

    public function run(): void
    {
        if (Achievement::count()) {
            return;
        }

        foreach ($this->achievements as $type => $achievements) {
            foreach ($achievements as $count => $name) {
                Achievement::create([
                    'name' => $name,
                    'count' => $count,
                    'achievable_type' => $type,
                ]);
            }
        }
    }
}
