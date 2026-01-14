<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ManagementTeam extends Model
{
    protected $table = "management_teams";
    protected $fillable = [
        'Name',
        'Designation',
        'Description',
        'FeaturedImage',
        'LinkedinLink',
        'Position',
        'IsActive',
    ];
}
