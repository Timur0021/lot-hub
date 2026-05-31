<?php

namespace App\Http\Controllers\Admin\Team;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use Illuminate\Contracts\View\View;

class IndexController extends Controller
{
    public function index(): View
    {
        $admins = Admin::all();

        return view('admin.team.index', compact('admins'));
    }
}
