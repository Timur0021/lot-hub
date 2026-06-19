<?php

namespace App\Http\Controllers\Admin\Roles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class EditController extends Controller
{
    public function edit(Role $role): View
    {
        return view('admin.roles.actions.edit', compact('role'));
    }
}
