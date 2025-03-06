<?php

namespace App\Policies;

use App\Models\Livre;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class LivrePolicy
{


    /**
     * Determine whether the user can permanently delete the model.
     */
    public function modify(User $user, Livre $livre): Response
    {
        return $user->id === $livre->user_id ?
        Response::allow() :
        Response::deny('you are not allowed to do that');
        ;
    }
}
