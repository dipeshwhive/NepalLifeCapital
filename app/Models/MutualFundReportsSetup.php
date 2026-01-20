<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MutualFundReportsSetup extends Model
{
    protected $table = 'mutual_fund_reports_setups';
    protected $fillable = [
        'DocumentName',
        'CreatedDate',
        'IsActive',
    ];
}
