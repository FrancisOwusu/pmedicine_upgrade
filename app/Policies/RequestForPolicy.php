<?php

namespace App\Policies;

use App\User;
use App\RequestFor;
use Illuminate\Auth\Access\HandlesAuthorization;

class RequestForPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any request fors.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the request for.
     *
     * @param  \App\User  $user
     * @param  \App\RequestFor  $requestFor
     * @return mixed
     */
    public function view(User $user, RequestFor $requestFor)
    {
        //
    }

    /**
     * Determine whether the user can create request fors.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the request for.
     *
     * @param  \App\User  $user
     * @param  \App\RequestFor  $requestFor
     * @return mixed
     */
    public function update(User $user, RequestFor $requestFor)
    {
        //
    }

    /**
     * Determine whether the user can delete the request for.
     *
     * @param  \App\User  $user
     * @param  \App\RequestFor  $requestFor
     * @return mixed
     */
    public function delete(User $user, RequestFor $requestFor)
    {
        //
    }

    /**
     * Determine whether the user can restore the request for.
     *
     * @param  \App\User  $user
     * @param  \App\RequestFor  $requestFor
     * @return mixed
     */
    public function restore(User $user, RequestFor $requestFor)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the request for.
     *
     * @param  \App\User  $user
     * @param  \App\RequestFor  $requestFor
     * @return mixed
     */
    public function forceDelete(User $user, RequestFor $requestFor)
    {
        //
    }
}
