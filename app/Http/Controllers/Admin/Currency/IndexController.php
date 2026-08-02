<?php

namespace App\Http\Controllers\Admin\Currency;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\Admin\Currency;

class IndexController extends Controller
{
    public function index(): View
    {
        $currencies = Currency::all();

        return view('admin.currency.index', compact('currencies'));
    }
}
