<?php

namespace App\Services\Admin\Auth;

use App\Models\Admin\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Throwable;

class AdminService
{
    /**
     * @param array $data
     * @return Admin
     * @throws Throwable
     */
    public function createAdmin(array $data): Admin
    {
        try {
            $admin = Admin::query()
                ->create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                ]);

            $admin->assignRole($data['role']);

            return $admin;
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
