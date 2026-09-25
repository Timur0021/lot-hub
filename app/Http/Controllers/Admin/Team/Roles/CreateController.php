<?php

namespace App\Http\Controllers\Admin\Team\Roles;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class CreateController extends Controller
{
    public function create(): View
    {
        return view('admin.team.roles.actions.create');
    }
}
