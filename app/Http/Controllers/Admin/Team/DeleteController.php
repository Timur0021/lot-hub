<?php

namespace App\Http\Controllers\Admin\Team;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete(Admin $admin): RedirectResponse
    {
        $admin->delete();

        return redirect()->route('admin.team.index');
    }
}
