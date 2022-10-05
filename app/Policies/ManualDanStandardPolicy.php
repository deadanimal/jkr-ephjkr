<?php

namespace App\Policies;

use App\Models\ManualDanStandard;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ManualDanStandardPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ManualDanStandard  $manualDanStandard
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, ManualDanStandard $manualDanStandard)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ManualDanStandard  $manualDanStandard
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, ManualDanStandard $manualDanStandard)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ManualDanStandard  $manualDanStandard
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, ManualDanStandard $manualDanStandard)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ManualDanStandard  $manualDanStandard
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, ManualDanStandard $manualDanStandard)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ManualDanStandard  $manualDanStandard
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, ManualDanStandard $manualDanStandard)
    {
        //
    }
}
