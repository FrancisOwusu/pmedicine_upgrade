<?php

namespace App\Policies;

use App\User;
use App\recallexam;
use Illuminate\Auth\Access\HandlesAuthorization;

class RecallExamPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any recallexams.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the recallexam.
     *
     * @param  \App\User  $user
     * @param  \App\recallexam  $recallexam
     * @return mixed
     */
    public function view(User $user, recallexam $recallexam)
    {
        //
    }

    /**
     * Determine whether the user can create recallexams.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the recallexam.
     *
     * @param  \App\User  $user
     * @param  \App\recallexam  $recallexam
     * @return mixed
     */
    public function update(User $user, recallexam $recallexam)
    {
        //
    }

    /**
     * Determine whether the user can delete the recallexam.
     *
     * @param  \App\User  $user
     * @param  \App\recallexam  $recallexam
     * @return mixed
     */
    public function delete(User $user, recallexam $recallexam)
    {
        //
    }

    /**
     * Determine whether the user can restore the recallexam.
     *
     * @param  \App\User  $user
     * @param  \App\recallexam  $recallexam
     * @return mixed
     */
    public function restore(User $user, recallexam $recallexam)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the recallexam.
     *
     * @param  \App\User  $user
     * @param  \App\recallexam  $recallexam
     * @return mixed
     */
    public function forceDelete(User $user, recallexam $recallexam)
    {
        //
    }
}
