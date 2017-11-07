<?php

namespace App\Policies;

use App\Models\Topic;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

/**
 * Class TopicPolicy
 * @package App\Policies
 */
class TopicPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * @param User $currentUser
     * @param Topic $topic
     * @return bool
     */
    public function update(User $currentUser, Topic $topic)
    {
        return $currentUser->id === $topic->user_id;
    }
}
