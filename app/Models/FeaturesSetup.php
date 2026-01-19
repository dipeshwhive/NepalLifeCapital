<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeaturesSetup extends Model
{
    protected $table = 'features_setups';
    protected $fillable = [
        'Title',
        'Description',
        'IsActive',
    ];
}
