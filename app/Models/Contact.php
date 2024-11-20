<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // protected $table = 'custom_table_name';



    protected $fillable = [
        'phone', 'user_id', 'name',
    ];

    /**
     * Relationship: Each contact belongs to a single user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
