<?php

namespace App\Policies;

use App\Models\Admin\Admin;
use App\Models\Admin\Setting;
use Illuminate\Auth\Access\HandlesAuthorization;

class SettingPolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user): bool
    {
        return $user->can('settings.view_all');
    }

    public function view(Admin $user, Setting $setting): bool
    {
        return $user->can('settings.view');
    }

    public function create(Admin $user): bool
    {
        return $user->can('settings.create');
    }

    public function update(Admin $user, Setting $setting): bool
    {
        return $user->can('settings.update');
    }

    public function delete(Admin $user, Setting $setting): bool
    {
        return $user->can('settings.delete');
    }

    public function deleteAny(Admin $user): bool
    {
        return $user->can('settings.delete_any');
    }

    public function forceDelete(Admin $user, Setting $setting): bool
    {
        return $user->can('settings.force_delete');
    }

    public function forceDeleteAny(Admin $user): bool
    {
        return $user->can('settings.force_delete_any');
    }

    public function restore(Admin $user, Setting $setting): bool
    {
        return $user->can('settings.restore');
    }

    public function restoreAny(Admin $user): bool
    {
        return $user->can('settings.restore_any');
    }

    public function replicate(Admin $user, Setting $setting): bool
    {
        return $user->can('settings.replicate');
    }

    public function reorder(Admin $user): bool
    {
        return $user->can('settings.reorder');
    }
}
