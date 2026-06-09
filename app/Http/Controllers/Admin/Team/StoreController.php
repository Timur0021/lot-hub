<?php

namespace App\Http\Controllers\Admin\Team;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Team\StoreAdminRequest;
use App\Services\Admin\Auth\AdminService;
use Illuminate\Http\Request;
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
    public function store(StoreAdminRequest $request)
    {
        dd($request->validated());
        $this->adminService->createAdmin(
            $request->validated()
        );


    }
}
