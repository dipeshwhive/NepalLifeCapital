<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MessageCP extends Model
{
    protected $table = "message_c_p_s";
    protected $fillable = [
        'Title',
        'Description',
        'FeaturedImage',
        'Is_Active',
    ];
}
