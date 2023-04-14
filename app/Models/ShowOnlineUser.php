<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowOnlineUser extends Model
{
    use HasFactory;

     protected $fillable=[
        'fk_user_id',
        'status',
    ];
    
}
