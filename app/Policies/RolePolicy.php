<?php

namespace App\Policies;

use App\Models\Admin\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;
use Spatie\Permission\Models\Role;

class RolePolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user): bool
    {
        return $user->can('roles.view_all');
    }

    public function view(Admin $user, Role $role): bool
    {
        return $user->can('roles.view');
    }

    public function create(Admin $user): bool
    {
        return $user->can('roles.create');
    }

    public function update(Admin $user, Role $role): bool
    {
        return $user->can('roles.update');
    }

    public function delete(Admin $user, Role $role): bool
    {
        return $user->can('roles.delete');
    }

    public function deleteAny(Admin $user): bool
    {
        return $user->can('roles.delete_any');
    }

    public function forceDelete(Admin $user, Role $role): bool
    {
        return $user->can('roles.force_delete');
    }

    public function forceDeleteAny(Admin $user): bool
    {
        return $user->can('roles.force_delete_any');
    }

    public function restore(Admin $user, Role $role): bool
    {
        return $user->can('roles.restore');
    }

    public function restoreAny(Admin $user): bool
    {
        return $user->can('roles.restore_any');
    }

    public function replicate(Admin $user, Role $role): bool
    {
        return $user->can('roles.replicate');
    }

    public function reorder(Admin $user): bool
    {
        return $user->can('roles.reorder');
    }
}
