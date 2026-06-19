<?php

namespace App\Http\Controllers\Admin\Roles;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Team\Roles\StoreRoleRequest;
use App\Services\Admin\RoleService;
use Illuminate\Http\RedirectResponse;
use Throwable;

class StoreController extends Controller
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
    public function store(StoreRoleRequest $request): RedirectResponse
    {
        $this->roleService->create(
            $request->validated()
        );

        return redirect()->route('admin.roles.index');
    }
}
