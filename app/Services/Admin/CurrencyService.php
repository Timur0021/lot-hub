<?php

namespace App\Services\Admin;

use App\Models\Admin\Currency;
use Illuminate\Support\Facades\Log;
use Throwable;

class CurrencyService
{
    /**
     * @param array $data
     * @return Currency
     * @throws Throwable
     */
    public function createCurrency(array $data): Currency
    {
        try {
            $currency = Currency::query()
                ->create([
                    'code' => $data['code'],
                    'name' => $data['name'],
                    'symbol' => $data['symbol'] ?? null,
                    'rate' => $data['rate'],
                    'is_base' => $data['is_base'] ?? false,
                    'active' => $data['active'] ?? true,
                ]);

                return $currency;
        } catch (Throwable $e) {
            Log::error(
                json_encode([
                    'success' => false,
                    'message' => 'Server error',
                    'error' => $e->getMessage(),
                    'line' => $e->getLine(),
                    'file' => $e->getFile(),
                ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
            );

            throw $e;
        }
    }

    public function updateCurrency(Currency $currency, array $data): Currency
    {
        try {
            $currency->update([
                'code' => $data['code'],
                'name' => $data['name'],
                'symbol' => $data['symbol'] ?? null,
                'rate' => $data['rate'],
                'is_base' => $data['is_base'] ?? false,
                'active' => $data['active'] ?? true,
            ]);

            return $currency;
        } catch (Throwable $e) {
            Log::error(
                json_encode([
                    'success' => false,
                    'message' => 'Server error',
                    'error' => $e->getMessage(),
                    'line' => $e->getLine(),
                    'file' => $e->getFile(),
                ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
            );

            throw $e;
        }
    }
}
