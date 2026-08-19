<?php

namespace App\Http\Controllers\Admin\Currency;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class CreateController extends Controller
{
    public function create(): View
    {
        return view('admin.currency.actions.create');
    }
}
