<?php

namespace App\Http\Controllers\Admin\Options\Settings;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function index(): View
    {
        return view('admin.options.settings.index');
    }
}
