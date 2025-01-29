<?php

namespace App\Events;

use App\Models\Message;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class AnonymousMessageSent implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;

    public $message;
    public $connection = 'sync';

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function broadcastOn()
    {

        return ['anonymous-chat'];

        // return ['anonymous-chat'];
    }

    public function broadcastAs()
    {
        return 'anonymous-message-sent' ;
    }

    public function broadcastWith()
    {
        return [
            'code' => $this->message['code'],
            'receiver_id' => $this->message['receiver_id'],
            'message' => $this->message['message'],
            'time' => $this->message['time']->toDateTimeString(),
        ];
    }
}
