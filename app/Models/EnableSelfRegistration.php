<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnableSelfRegistration extends Model
{
    use HasFactory;
    protected $fillable=[
        'status'
    ];
}
