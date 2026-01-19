<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YearSetup extends Model
{
    protected $table = "year_setups";
    protected $fillable = [
        'Year',
        'IsActive',
    ];
}
