<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MutualFundSchemeManagement extends Model
{
    protected $table = "mutual_fund_scheme_management";
    protected $fillable = [
        'Title',
        'MaturityPeriod',
        'FundSize',
        'SchemeType',
        'IsActive',
    ];
}
