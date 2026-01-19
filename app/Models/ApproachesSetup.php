<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApproachesSetup extends Model
{
    protected $table = 'approaches_setups';
    protected $fillable = [
        'Title',
        'Description',
        'IsActive',
    ];
}
