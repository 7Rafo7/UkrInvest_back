<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'msg_author',
        'author_email',
        'subject',
        'msg_content',
    ];
}
