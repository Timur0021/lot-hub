<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    protected $table = 'messages';

    protected $fillable = [
        'sender_id',
        'receiver_id',
        'body',
    ];

    protected $casts = [
        'read_at' => 'datetime',
    ];

    public function sender(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'sender_id');
    }

    public function receiver(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'receiver_id');
    }

    #[Scope]
    public function betweenUsers(Builder $query, int $userId, int $otherUserId): Builder
    {
        return $query->where(function (Builder $query) use ($userId, $otherUserId) {
           $query
                ->where('sender_id', $userId)
                ->where('receiver_id', $otherUserId);
        })->orWhere(function (Builder $query) use ($userId, $otherUserId) {
            $query
                ->where('sender_id', $otherUserId)
                ->where('receiver_id', $userId);
        });
    }
}
