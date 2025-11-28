<?php

namespace App\Policies;

use App\User;
use App\recallmodel;
use Illuminate\Auth\Access\HandlesAuthorization;

class recallmodelPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any recallmodels.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the recallmodel.
     *
     * @param  \App\User  $user
     * @param  \App\recallmodel  $recallmodel
     * @return mixed
     */
    public function view(User $user, recallmodel $recallmodel)
    {
        //
    }

    /**
     * Determine whether the user can create recallmodels.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the recallmodel.
     *
     * @param  \App\User  $user
     * @param  \App\recallmodel  $recallmodel
     * @return mixed
     */
    public function update(User $user, recallmodel $recallmodel)
    {
        //
    }

    /**
     * Determine whether the user can delete the recallmodel.
     *
     * @param  \App\User  $user
     * @param  \App\recallmodel  $recallmodel
     * @return mixed
     */
    public function delete(User $user, recallmodel $recallmodel)
    {
        //
    }

    /**
     * Determine whether the user can restore the recallmodel.
     *
     * @param  \App\User  $user
     * @param  \App\recallmodel  $recallmodel
     * @return mixed
     */
    public function restore(User $user, recallmodel $recallmodel)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the recallmodel.
     *
     * @param  \App\User  $user
     * @param  \App\recallmodel  $recallmodel
     * @return mixed
     */
    public function forceDelete(User $user, recallmodel $recallmodel)
    {
        //
    }
}
