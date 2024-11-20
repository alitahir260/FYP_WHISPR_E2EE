<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'message_id',
        'content',
        'type',
    ];

    /**
     * Relationship: A notification belongs to a user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relationship: A notification optionally belongs to a message.
     */
    public function message()
    {
        return $this->belongsTo(Message::class);
    }
}
