<?php

namespace App\Http\Controllers\Admin\Currency;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Models\Admin\Currency;

class DeleteController extends Controller
{
    public function delete(Currency $currency): RedirectResponse
    {
        $currency->delete();

        return redirect()->route('admin.currency.index');
    }
}
