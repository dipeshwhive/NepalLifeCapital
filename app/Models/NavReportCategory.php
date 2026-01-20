<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NavReportCategory extends Model
{
    protected $table = "nav_report_categories";
    protected $fillable = [
        'Title',
        'IsActive',
    ];

    public function reports()
    {
        return $this->hasMany(NavReport::class, 'CategoryID');
    }
}
