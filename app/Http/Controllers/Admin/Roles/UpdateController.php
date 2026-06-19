<?php

namespace App\Http\Controllers\Admin\Roles;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UpdateController extends Controller
{
    public function update(Role $role): RedirectResponse
    {
        dd(212);
    }
}
