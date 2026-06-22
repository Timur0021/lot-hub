<?php

namespace App\Services\Admin;

class PermissionService
{
    public static function make(string $permission): string
    {
        [$model, $action] = explode('.', $permission);

        $actions = [
            'view' => 'View',
            'view_all' => 'View All',
            'create' => 'Create',
            'update' => 'Update',
            'delete' => 'Delete',
            'delete_any' => 'Delete Any',
            'force_delete' => 'Force Delete',
            'force_delete_any' => 'Force Delete Any',
            'restore' => 'Restore',
            'restore_any' => 'Restore Any',
            'replicate' => 'Replicate',
            'reorder' => 'Reorder',
        ];

        $actionLabel = $actions[$action] ?? ucfirst($action);
        $modelLabel = ucfirst($model);

        return "{$actionLabel} {$modelLabel}";
    }
}
