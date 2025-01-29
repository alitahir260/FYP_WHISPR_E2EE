<?php

namespace App\Events;

use App\Models\Message;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class MessageSent implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;

    public $message;
    public $user;
    public $connection = 'sync';

    public function __construct(Message $message, $user)
    {
        $this->message = $message;
        $this->user = $user;
    }

    public function broadcastOn()
    {
        // logger($this->message);
        // logger($this->user);
        // return new PrivateChannel('chat.' . $this->message->receiver_id);

        return ['my-channel'];

    }

    public function broadcastAs()
    {
        return 'my-event' ;

    }

    public function broadcastWith()
    {
        return [
            'id' => $this->message->id,
            'sender_id' => $this->message->sender_id,
            'receiver_id' => $this->message->receiver_id,
            'message' => $this->message->message,
            'sender_avatar' =>$this->user->profile_picture ?  asset('/storage/'.$this->user->profile_picture) : 'http://127.0.0.1:8000/build/images/users/avatar-2.jpg',
            'time' => $this->message->created_at->toDateTimeString(),
        ];
    }
}
