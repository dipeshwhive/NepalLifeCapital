<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioProductsSetup extends Model
{
    protected $table = "portfolio_products_setups";
    protected $fillable = [
        "Title",
        "Description",
        "FeaturedImage",
        "TargetMarket",
        "Features",
        "Category",
        "ContractPeriod",
        "LockPeriod",
        "AUMFees",
        "HurdleRate",
        "ExpectedReturn",
        "MinimumPortfolio",
        "PerformanceFee",
        "ExitLoad",
        "Objectives",
        "MinInvestment",
        "ShowNav",
        "ShowHome",
        "IsActive",
    ];
}
