<?php

namespace App\Http\Controllers\Admin\Team;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class CreateController extends Controller
{
    public function create(): View
    {
        $roles = Role::all();

        return view('admin.team.actions.create', compact('roles'));
    }
}
