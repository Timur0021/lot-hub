<?php

namespace App\Http\Controllers\Admin\Roles;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class DeleteController extends Controller
{
    public function delete(Role $role): RedirectResponse
    {
        $role->delete();

        return redirect()->route('admin.roles.index');
    }
}
