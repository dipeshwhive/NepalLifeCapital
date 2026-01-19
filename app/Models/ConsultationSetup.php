<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsultationSetup extends Model
{
    protected $table = "consultation_setups";
    protected $fillable = [
        "Title",
        "Description",
        "FeaturedImage",
        "IsActive",
    ];
}
