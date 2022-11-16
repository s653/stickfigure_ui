<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'sender_id',
        'notifiable_id',
        'notifiable_type',
        'subject',
        'body',
        'child_id',
        'read'
    ];
}
