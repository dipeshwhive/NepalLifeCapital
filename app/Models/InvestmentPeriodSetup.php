<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvestmentPeriodSetup extends Model
{
    protected $table = "investment_period_setups";
    protected $fillable = [
        'Title',
        'NumericValue',
        'IsActive',
    ];
}
