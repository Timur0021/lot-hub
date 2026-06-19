<?php

namespace App\Services\Admin;

class PermissionService
{
    public static function make(string $permission): string
    {
        [$model, $action] = explode('.', $permission);

        $actions = [
            'view' => 'View',
            'create' => 'Create',
            'update' => 'Update',
            'delete' => 'Delete',
        ];

        $actionLabel = $actions[$action] ?? ucfirst($action);
        $modelLabel = ucfirst($model);

        return "{$actionLabel} {$modelLabel}";
    }
}
