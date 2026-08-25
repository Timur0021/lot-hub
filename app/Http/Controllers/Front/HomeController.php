<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Admin\Currency;

class HomeController extends Controller
{
    public function index(): View
    {
        $currencies = Currency::query()
            ->active()
            ->get();

        $locales = config('app.locale_names');

        return view('front.home', compact('currencies', 'locales'));
    }
}
