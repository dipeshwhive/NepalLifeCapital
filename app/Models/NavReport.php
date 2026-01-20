<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NavReport extends Model
{
    protected $table="nav_reports";
    protected $fillable = [
        'TransactionAmount',
        'Commission',
        'CategoryID',
        'IsActive',
    ];

    public function category()
    {
        return $this->belongsTo(NavReportCategory::class, 'CategoryID');
    }
}
