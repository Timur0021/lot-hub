<?php

namespace App\Http\Controllers\Admin\Team\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Spatie\Permission\Models\Role;

class CreateController extends Controller
{
    public function create(): View
    {
        $roles = Role::all();

        return view('admin.team.admins.actions.create', compact('roles'));
    }
}
