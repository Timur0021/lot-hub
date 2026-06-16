<?php

namespace App\Http\Controllers\Admin\Roles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class IndexController extends Controller
{
    public function index(): View
    {
        $roles = Role::query()->paginate(10);

        return view('admin.roles.index', compact('roles'));
    }
}
