<?php

namespace App\Policies;

use App\Models\User;

class NavigationPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function isAdmin(User $user)
    {
        return $user->user_type === 'admin';
    }

    public function isUser(User $user)
    {
        return $user->user_type === 'user';
    }

}
