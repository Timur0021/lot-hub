<?php

namespace App\Http\Controllers\Admin\Team\Roles;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Spatie\Permission\Models\Role;

class DeleteController extends Controller
{
    public function delete(Role $role): RedirectResponse
    {
        $role->delete();

        return redirect()->route('admin.roles.index');
    }
}
