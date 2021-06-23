<?php

namespace App\Policies;

use App\Models\Pub;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PubPolicy
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
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Pub  $pub
     * @return mixed
     */
    public function view(User $user, Pub $pub)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Pub  $pub
     * @return mixed
     */
    public function update(User $user, Pub $pub)
    {
        return $user->id === $pub->user->id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Pub  $pub
     * @return mixed
     */
    public function delete(User $user, Pub $pub)
    {
        return $user->id === $pub->user->id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Pub  $pub
     * @return mixed
     */
    public function restore(User $user, Pub $pub)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Pub  $pub
     * @return mixed
     */
    public function forceDelete(User $user, Pub $pub)
    {
        //
    }
}
