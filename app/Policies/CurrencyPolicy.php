<?php

namespace App\Policies;

use App\Models\Admin\Admin;
use App\Models\Admin\Currency;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CurrencyPolicy
{
    use HandlesAuthorization;

    public function viewAny(Admin $user): bool
    {
        return $user->can('currencys.view_all');
    }

    public function view(Admin $user, Currency $currency): bool
    {
        return $user->can('currencys.view');
    }

    public function create(Admin $user): bool
    {
        return $user->can('currencys.create');
    }

    public function update(Admin $user, Currency $currency): bool
    {
        return $user->can('currencys.update');
    }

    public function delete(Admin $user, Currency $currency): bool
    {
        return $user->can('currencys.delete');
    }

    public function deleteAny(Admin $user): bool
    {
        return $user->can('currencys.delete_any');
    }

    public function forceDelete(Admin $user, Currency $currency): bool
    {
        return $user->can('currencys.force_delete');
    }

    public function forceDeleteAny(Admin $user): bool
    {
        return $user->can('currencys.force_delete_any');
    }

    public function restore(Admin $user, Currency $currency): bool
    {
        return $user->can('currencys.restore');
    }

    public function restoreAny(Admin $user): bool
    {
        return $user->can('currencys.restore_any');
    }

    public function replicate(Admin $user, Currency $currency): bool
    {
        return $user->can('currencys.replicate');
    }

    public function reorder(Admin $user): bool
    {
        return $user->can('currencys.reorder');
    }
}
