<?php

namespace App\Http\Controllers\Admin\Currency;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Currency\UpdateCurrencyRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Admin\Currency;
use App\Services\Admin\CurrencyService;
use Throwable;

class UpdateController extends Controller
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
    public function update(UpdateCurrencyRequest $request, Currency $currency): RedirectResponse
    {
        $this->currencyService->updateCurrency(
            $currency,
            $request->validated()
        );

        return redirect()->route('admin.currency.index');
    }
}
