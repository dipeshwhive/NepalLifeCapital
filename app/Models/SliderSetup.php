<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderSetup extends Model
{
    protected $table = "slider_setups";
    protected $fillable = [
        "MainTitle","SubTitle","FeaturedImage","IsActive",
    ];
}
