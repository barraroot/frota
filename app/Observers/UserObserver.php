<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
    public function creating(User $user)
    {
        $user->password = bcrypt($user->password);
    }

    public function updating(User $user)
    {
        if($user->password == null)
            $user->password = $user->getRawOriginal('password');
        else
            $user->password = bcrypt($user->password);
    }
}
