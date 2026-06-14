<?php

namespace App\Http\Controllers\Admin\Team;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Team\UpdateAdminRequest;
use App\Models\Admin\Admin;
use App\Services\Admin\Auth\AdminService;
use Illuminate\Http\RedirectResponse;
use Throwable;

class UpdateController extends Controller
{
    /**
     * @var AdminService
     */
    protected AdminService $adminService;

    public function __construct(AdminService $adminService)
    {
        $this->adminService = $adminService;
    }

    /**
     * @throws Throwable
     */
    public function update(UpdateAdminRequest $request, Admin $admin): RedirectResponse
    {
        $this->adminService->updateAdmin(
            $admin,
            $request->validated()
        );

        return redirect()->route('admin.team.index');
    }
}
