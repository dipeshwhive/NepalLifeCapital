<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventSetup extends Model
{
    protected $table="event_setups";
    protected $fillable=[
        'Title',
        'Description',
        'FeaturedImage',
        'CreatedDate',
        'Slug',
        'IsActive',
    ];
}
