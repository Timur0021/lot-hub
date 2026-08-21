<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use App\Models\Admin\Message;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(): View
    {
        $currentUserId = auth()->id();

        $chatUsers = Admin::query()
            ->whereKeyNot($currentUserId)
            ->select([
                'id',
                'name',
                'last_name',
            ])
            ->orderBy('name')
            ->get();

        $lastMessage = Message::query()
            ->where(function ($query) use ($currentUserId) {
                $query
                    ->where('sender_id', $currentUserId)
                    ->orWhere('receiver_id', $currentUserId);
            })
            ->latest('created_at')
            ->first();

        $lastChatUserId = null;

        if ($lastMessage) {
            $lastChatUserId =
                (int) $lastMessage->sender_id === (int) $currentUserId
                ? $lastMessage->receiver_id
                : $lastMessage->sender_id;
        }

        return view('admin.dashboard', compact('chatUsers', 'lastChatUserId'));
    }
}
