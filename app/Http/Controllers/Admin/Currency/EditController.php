<?php

namespace App\Http\Controllers\Admin\Currency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Admin\Currency;

class EditController extends Controller
{
    public function edit(Currency $currency): View
    {
        return view('admin.currency.actions.edit', compact('currency'));
    }
}
