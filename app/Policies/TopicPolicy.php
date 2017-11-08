<?php

namespace App\Policies;

use App\Models\Topic;
use App\Models\User;

/**
 * Class TopicPolicy
 * @package App\Policies
 */
class TopicPolicy extends Policy
{
    /**
     * @param User $currentUser
     * @param Topic $topic
     * @return bool
     */
    public function update(User $user, Topic $topic)
    {
        return $user->isAuthorOf($topic);
    }

    public function destroy(User $user, Topic $topic)
    {
        return $user->isAuthorOf($topic);
    }
}
