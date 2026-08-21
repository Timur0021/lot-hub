<?php

namespace App\Services\Admin;

use App\Events\MessageSent;
use App\Models\Admin\Admin;
use App\Models\Admin\Message;
use Illuminate\Support\Facades\DB;
use Throwable;

class SendMessageService
{
    /**
     * @throws Throwable
     */
    public function execute(Admin $sender, int $receiverId, string $body): Message
    {
        return DB::transaction(function () use ($sender, $receiverId, $body) {
            $message = Message::query()
                ->create([
                    'sender_id' => $sender->id,
                    'receiver_id' => $receiverId,
                    'body' => $body,
                ]);

            $message->load([
                'sender',
                'receiver'
            ]);

            MessageSent::dispatch($message);

            return $message;
        });
    }
}
