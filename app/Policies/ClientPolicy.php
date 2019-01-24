<?php

namespace App\Policies;

use App\User;
use App\sale;
use App\client;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClientPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the client.
     *
     * @param  \App\User  $user
     * @param  \App\client  $client
     * @return mixed
     */
    public function view(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can create clients.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
      if ($user->dost < 2 )
         return true;
       else
           return false;
    }

    /**
     * Determine whether the user can update the client.
     *
     * @param  \App\User  $user
     * @param  \App\client  $client
     * @return mixed
     */
    public function update(User $user)
    {
      if ($user->dost < 2 )
         return true;
       else
           return false;
    }

    /**
     * Determine whether the user can delete the client.
     *
     * @param  \App\User  $user
     * @param  \App\client  $client
     * @return mixed
     */
    public function delete(User $user)
    {
      if ($user->dost < 2 )
         return true;
       else
           return false;
    }
}
