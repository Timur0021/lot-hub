<?php

namespace App\Policies;

use App\Models\Admin\Admin;
use App\Models\Admin\TextInSite;
use Illuminate\Auth\Access\HandlesAuthorization;
class TextInSitePolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user): bool
    {
        return $user->can('textinsites.view_all');
    }

    public function view(Admin $user, TextInSite $textInSite): bool
    {
        return $user->can('textinsites.view');
    }

    public function create(Admin $user): bool
    {
        return $user->can('textinsites.create');
    }

    public function update(Admin $user, TextInSite $textInSite): bool
    {
        return $user->can('textinsites.update');
    }

    public function delete(Admin $user, TextInSite $textInSite): bool
    {
        return $user->can('textinsites.delete');
    }

    public function deleteAny(Admin $user): bool
    {
        return $user->can('textinsites.delete_any');
    }

    public function forceDelete(Admin $user, TextInSite $textInSite): bool
    {
        return $user->can('textinsites.force_delete');
    }

    public function forceDeleteAny(Admin $user): bool
    {
        return $user->can('textinsites.force_delete_any');
    }

    public function restore(Admin $user, TextInSite $textInSite): bool
    {
        return $user->can('textinsites.restore');
    }

    public function restoreAny(Admin $user): bool
    {
        return $user->can('textinsites.restore_any');
    }

    public function replicate(Admin $user, TextInSite $textInSite): bool
    {
        return $user->can('textinsites.replicate');
    }

    public function reorder(Admin $user): bool
    {
        return $user->can('textinsites.reorder');
    }
}
