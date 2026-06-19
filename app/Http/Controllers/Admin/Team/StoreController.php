<?php

namespace App\Http\Controllers\Admin\Team;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Team\Admins\StoreAdminRequest;
use App\Services\Admin\AdminService;
use Illuminate\Http\RedirectResponse;
use Throwable;

class StoreController extends Controller
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
    public function store(StoreAdminRequest $request): RedirectResponse
    {
        $this->adminService->createAdmin(
            $request->validated()
        );

        return redirect()->route('admin.team.index');
    }
}
