<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AchievementUnlocked
{
    use Dispatchable,SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(public string $achievement_name, public User $user)
    {
    }
}
