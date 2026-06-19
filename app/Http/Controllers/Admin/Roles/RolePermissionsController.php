<?php

namespace App\Http\Controllers\Admin\Roles;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionsController extends Controller
{
    public function edit(Role $role): View
    {
        $permissions = Permission::all()
            ->groupBy(function (Permission $permission) {
                return explode('.', $permission->name)[0];
            });

        $rolePermissions = $role->permissions->pluck('name')->toArray();

        return view('admin.roles.permissions', compact(
            'role',
            'permissions',
            'rolePermissions'
        ));
    }

    public function update(Request $request, Role $role): RedirectResponse
    {
        $permissions = $request->input('permissions', []);

        $role->syncPermissions($permissions);

        return redirect()->route('admin.roles.index');
    }
}
