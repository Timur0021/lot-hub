<?php

use App\Models\Admin\Admin;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel(
    'chat.{userId}',
    function (Admin $admin, int $userId): bool {
        return (int) $admin->id === (int) $userId;
    },
    [
        'guards' => ['admin'],
    ]
);
