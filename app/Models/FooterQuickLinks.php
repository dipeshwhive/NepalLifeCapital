<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FooterQuickLinks extends Model
{
    protected $table = "footer_quick_links";
    protected $fillable = [
        "Title",
        "Url",
        "IsActive",
    ];
}
