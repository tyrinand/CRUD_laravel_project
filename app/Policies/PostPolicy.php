<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
     public function login(User $user)
     {
       return true;
     }

     public function logout(User $user)
     {
       return true;
     }

     public function view(User $user)
     {
      if ($user->dost == 0 )
         return true;
       else
           return false;
     }


    public function index(User $user)
    {
      /*if ($user->admin())
        return true;
      else
          return false;
      */
     if ($user->dost == 0 )
        return true;
      else
          return false;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
      if ($user->dost == 0 )
         return true;
       else
           return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function update(User $user)
    {
      if ($user->dost == 0 )
         return true;
       else
           return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function delete(User $user)
    {
      if ($user->dost == 0 )
        return true;
      else
          return false;
    }
}
