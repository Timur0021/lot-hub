<?php

namespace App\Http\Controllers\Admin\Roles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CreateController extends Controller
{
    public function create(): View
    {
        return view('admin.roles.actions.create');
    }
}
