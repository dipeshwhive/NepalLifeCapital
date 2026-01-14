<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyProfileSetup extends Model
{
    protected $table = "company_profile_setups";

    protected $fillable = [
        "Title", "SubTitle", "Description", "Mission", "Vision", "FeaturedImage","IsActive",
    ];
}
