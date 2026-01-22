<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactList extends Model
{
    protected $table="contact";
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'message',
    ];
}
