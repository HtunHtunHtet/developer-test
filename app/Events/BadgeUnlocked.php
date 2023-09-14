<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class BadgeUnlocked
{
    use Dispatchable,SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(public string $badge_name, public User $user)
    {
    }
}
