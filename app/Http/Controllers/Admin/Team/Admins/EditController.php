<?php

namespace App\Http\Controllers\Admin\Team\Admins;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use Illuminate\Contracts\View\View;
use Spatie\Permission\Models\Role;

class EditController extends Controller
{
    public function edit(Admin $admin): View
    {
        $roles = Role::all();
        return view('admin.team.admins.actions.edit', compact('admin', 'roles'));
    }
}
