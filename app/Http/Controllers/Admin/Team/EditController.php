<?php

namespace App\Http\Controllers\Admin\Team;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Spatie\Permission\Models\Role;

class EditController extends Controller
{
    public function edit(Admin $admin): View
    {
        $roles = Role::all();
        return view('admin.team.actions.edit', compact('admin', 'roles'));
    }
}
