<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AnonymousChatConnected implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $enteredCode;
    public $newChatCode;
    public $connection = 'sync';

    /**
     * Create a new event instance.
     *
     * @param  mixed  $enteredCode
     * @param  mixed  $newChatCode
     */
    public function __construct($enteredCode, $newChatCode)
    {
        $this->enteredCode = $enteredCode;
        $this->newChatCode = $newChatCode;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn()
    {
        logger('Broadcasting to anonymous-chat-connected');
        // Dynamically create the private channel for the user
        return ['anonymous-chat-connected'];
    }

    /**
     * Optional: Customize the broadcast event name
     *
     * @return string
     */
    public function broadcastAs()
    {
        return 'anonymous.chat.connected';
    }

    public function broadcastWith()
    {
        return [
            'code' => $this->enteredCode,
            'chat_code' => $this->newChatCode
        ];
    }
}
