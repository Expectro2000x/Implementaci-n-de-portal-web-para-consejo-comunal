<?php

namespace App\Policies;

use App\Models\Noticia;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class NoticiaPolicy
{
    /**
     * Determine whether the user can view any models.
     */

    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Noticia $noticia)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->roleid == 2;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Noticia $noticia): bool
    {
        return $user->roleid == $noticia->roleid;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Noticia $noticia): bool
    {
        return $user->roleid == $noticia->roleid;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Noticia $noticia)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Noticia $noticia)
    {
        //
    }
}
