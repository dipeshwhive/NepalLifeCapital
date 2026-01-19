<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ObjectivesSetup extends Model
{
    protected $table = "objectives_setups";
    protected $fillable = [
        'Title',
        'Description',
        'IsActive',
    ];
}
