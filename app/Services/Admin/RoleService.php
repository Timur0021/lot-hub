<?php

namespace App\Services\Admin;

use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Role;
use Throwable;

class RoleService
{
    /**
     * @param array $data
     * @return Role
     * @throws Throwable
     */
    public function create(array $data): Role
    {
        try {
            return Role::query()
                ->firstOrCreate([
                    'name' => $data['name'],
                    'guard_name' => 'admin',
                ]);
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
