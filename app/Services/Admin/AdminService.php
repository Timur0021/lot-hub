<?php

namespace App\Services\Admin;

use App\Models\Admin\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Role;
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
                    'last_name' => $data['last_name'] ?? null,
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                ]);

            if (!empty($data['avatar'])) {
                $admin->addMedia($data['avatar'])
                    ->toMediaCollection('avatar');
            }

            $role = Role::query()->findOrFail($data['role']);

            $admin->assignRole($role);

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


    /**
     * @throws Throwable
     */
    public function updateAdmin(Admin $admin, array $data): Admin
    {
        try {
            $admin->update([
                'name' => $data['name'],
                'last_name' => $data['last_name'] ?? null,
                'email' => $data['email'],
                'password' => !empty($data['password'])
                    ? Hash::make($data['password'])
                    : $admin->password,
            ]);

            if (!empty($data['avatar'])) {
                $admin->clearMediaCollection('avatar');

                $admin->addMedia($data['avatar'])
                    ->toMediaCollection('avatar');
            }

            if (!empty($data['role'])) {
                $role = Role::query()->findOrFail($data['role']);

                $admin->syncRoles([$role]);
            }

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
