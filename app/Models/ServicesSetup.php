<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicesSetup extends Model
{
    protected $table = "services_setups";
    protected $fillable = [
        'Title',
        'Description',
        'Slug',
        'SubTitle1',
        'SubDescription1',
        'SubTitle2',
        'SubDescription2',
        'FeaturedImage',
        'ServiceCategory',
        'ShowInHomePage',
        'Route',
        'IsActive',
    ];
}
