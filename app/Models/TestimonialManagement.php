<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestimonialManagement extends Model
{
    protected $table = "testimonial_management";
    protected $fillable = [
        "Name",
        "Designation",
        "Message",
        "IsActive",
    ];
}
