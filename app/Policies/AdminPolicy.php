<?php

namespace App\Policies;

use App\Models\Admin\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminPolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user): bool
    {
        return $user->can('admins.view_all');
    }

    public function view(Admin $user): bool
    {
        return $user->can('admins.view');
    }

    public function create(Admin $user): bool
    {
        return $user->can('admins.create');
    }

    public function update(Admin $user): bool
    {
        return $user->can('admins.update');
    }

    public function delete(Admin $user): bool
    {
        return $user->can('admins.delete');
    }

    public function deleteAny(Admin $user): bool
    {
        return $user->can('admins.delete_any');
    }

    public function forceDelete(Admin $user): bool
    {
        return $user->can('admins.force_delete');
    }

    public function forceDeleteAny(Admin $user): bool
    {
        return $user->can('admins.force_delete_any');
    }

    public function restore(Admin $user): bool
    {
        return $user->can('admins.restore');
    }

    public function restoreAny(Admin $user): bool
    {
        return $user->can('admins.restore_any');
    }

    public function replicate(Admin $user): bool
    {
        return $user->can('admins.replicate');
    }

    public function reorder(Admin $user): bool
    {
        return $user->can('admins.reorder');
    }
}
