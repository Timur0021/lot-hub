<?php

namespace App\Http\Controllers\Admin\Chat;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Messages\SendMessageRequest;
use App\Http\Resources\MessageResource;
use App\Models\Admin\Message;
use App\Services\Admin\SendMessageService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Throwable;

class MessageController extends Controller
{
    public function index(Request $request, int $userId): JsonResponse
    {
        $messages = Message::query()
            ->betweenUsers(
                auth('admin')->id(),
                $userId
            )
            ->with([
                'sender:id,name',
                'receiver:id,name',
            ])
            ->orderBy('created_at')
            ->paginate(50);

        return MessageResource::collection($messages)->response();
    }

    /**
     * @throws Throwable
     */
    public function store(SendMessageRequest $request, SendMessageService $service): MessageResource
    {
        $message = $service->execute(
            sender: auth('admin')->user(),
            receiverId: $request->receiverId(),
            body: $request->body(),
        );

        return new MessageResource($message);
    }
}
