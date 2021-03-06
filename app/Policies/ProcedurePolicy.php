<?php

namespace App\Policies;

use App\Procedure;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProcedurePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->roles == 'ADMINISTRATOR' || $user->roles == 'PARTNER';
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Procedure  $procedure
     * @return mixed
     */
    public function view(User $user, Procedure $procedure)
    {
        return $user->roles == 'ADMINISTRATOR' || $user->roles == 'PARTNER' || $user->roles == 'ENGINEER';
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->roles == 'ADMINISTRATOR';
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Procedure  $procedure
     * @return mixed
     */
    public function update(User $user, Procedure $procedure)
    {
        return $user->roles == 'ADMINISTRATOR';
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Procedure  $procedure
     * @return mixed
     */
    public function delete(User $user, Procedure $procedure)
    {
        return $user->roles == 'ADMINISTRATOR';
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Procedure  $procedure
     * @return mixed
     */
    public function restore(User $user, Procedure $procedure)
    {
        return $user->roles == 'ADMINISTRATOR';
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Procedure  $procedure
     * @return mixed
     */
    public function forceDelete(User $user, Procedure $procedure)
    {
        return $user->roles == 'ADMINISTRATOR';
    }
}
