<?php

use App\Models\ConsultationSetup;
use App\Models\FAQSetup;
use App\Models\SiteSettings;
use App\Models\FAQCategorySetup;
use App\Models\FooterQuickLinks;
use App\Models\PortfolioProductsSetup;
use App\Models\ServicesSetup;
use Illuminate\Support\Facades\DB;
use App\Models\SocialSitesManagement;


function siteSetting()
{
    return SiteSettings::first();
}

function getImage($folder, $file)
{

    return asset("assets/{$folder}/{$file}");
}

function socialSites()
{
    return SocialSitesManagement::where('is_active', 1)
        ->get();
}

function faqs()
{
    return FAQSetup::where('IsActive', 1)
        ->get();
}

function data()
{
    return DB::table('data_table')
        ->where('is_active', 1)
        ->get();
}

function primaryService()
{
    return ServicesSetup::where('ServiceCategory', 'primary')
        ->where('IsActive', 1)
        ->get();
}

function homePrimaryService()
{
    return ServicesSetup::where('ServiceCategory', 'primary')
        ->where('IsActive', 1)
        ->where('ShowInHomePage', 1)
        ->get();
}

function products()
{
    return PortfolioProductsSetup::where('ShowNav', 1)
        ->get();
}

function consultation()
{
    return ConsultationSetup::where('IsActive', 1)
        ->first();
}

function PMS()
{
    return ServicesSetup::where('Slug', 'Portfolio_Management_Service')
        ->first();
}

function FAQCategory()
{
    return FAQCategorySetup::where('IsActive', '1')
        ->get();
}

function getFAQCount($category): int
{
    return FAQSetup::where('CategoryId', $category)
        ->count();
}

function footerQuickLinks()
{
    return FooterQuickLinks::where('IsActive', 1)
        ->get();
}