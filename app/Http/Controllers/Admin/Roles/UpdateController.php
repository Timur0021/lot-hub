<?php

namespace App\Http\Controllers\Admin\Roles;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Team\Roles\UpdateRoleRequest;
use App\Services\Admin\RoleService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Throwable;

class UpdateController extends Controller
{
    /**
     * @var RoleService
     */
    protected RoleService $roleService;

    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }

    /**
     * @throws Throwable
     */
    public function update(UpdateRoleRequest $request, Role $role): RedirectResponse
    {
        $this->roleService->update(
            $role,
            $request->validated()
        );

        return redirect()->route('admin.roles.index');
    }
}
