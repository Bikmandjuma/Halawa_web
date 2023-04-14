<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplyGuestContactMessage extends Model
{
    use HasFactory;

    protected $fillable=[
        'fk_sender_id',
        'reply_message',
    ];
}
