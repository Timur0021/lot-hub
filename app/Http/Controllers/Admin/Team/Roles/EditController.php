<?php

namespace App\Http\Controllers\Admin\Team\Roles;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class EditController extends Controller
{
    public function edit(Role $role): View
    {
        return view('admin.team.roles.actions.edit', compact('role'));
    }
}
