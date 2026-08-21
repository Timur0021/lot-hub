<?php

namespace App\Http\Controllers\Admin\Currency;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\CurrencyService;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\Currency\StoreCurrencyRequest;
use Illuminate\Session\Store;
use Throwable;

class StoreController extends Controller
{
    /**
     * @var CurrencyService
     */
    protected CurrencyService $currencyService;

    public function __construct(CurrencyService $currencyService)
    {
        $this->currencyService = $currencyService;
    }

    /**
     * @throws Throwable
     */
    public function store(StoreCurrencyRequest $request): RedirectResponse
    {
        $this->currencyService->createCurrency(
            $request->validated()
        );

        return redirect()->route('admin.currency.index');
    }
}

