<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactList extends Model
{
    protected $table="contact_lists";
    protected $fillable = [
        'Name',
        'Email',
        'PhoneNumber',
        'Message',
    ];
}
