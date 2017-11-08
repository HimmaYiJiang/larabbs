<?php

namespace App\Policies;

use App\Models\User;

/**
 * Class UserPolicy
 * @package App\Policies
 */
class UserPolicy extends Policy
{
    /**
     * @param User $currentUser
     * @param User $user
     * @return bool
     */
    public function update(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id;
    }
}
