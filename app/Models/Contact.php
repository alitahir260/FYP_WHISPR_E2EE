<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // protected $table = 'custom_table_name';



    protected $fillable = [
        'phone', 'user_id', 'name' , 'contact_user_id',
    ];

    /**
     * Relationship: Each contact belongs to a single user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * The user who is the contact (the one being added).
     */
    public function contactUser()
    {
        return $this->belongsTo(User::class, 'contact_user_id');
    }

}
