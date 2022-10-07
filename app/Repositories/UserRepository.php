<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Contract\UserContract;

final class UserRepository extends BaseRepository implements UserContract
{
    public function __construct(
        protected User $user
    )
    {
    }
}
