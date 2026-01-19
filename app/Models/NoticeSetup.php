<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NoticeSetup extends Model
{
    protected $table = "notice_setups";
    protected $fillable = [
        'Title',
        'Description',
        'FeaturedImage',
        'CreatedDate',
        'IsActive',
    ];
}
