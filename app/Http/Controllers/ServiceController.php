<?php

namespace App\Http\Controllers;

use App\Models\DPFunctionSetup;
use App\Models\PortfolioProductsSetup;
use App\Models\ServicesSetup;

class ServiceController extends Controller
{
    public function primaryService($slug){

        $service = ServicesSetup::where('Slug',$slug)
        ->where('IsActive',1)
        ->first();

        $portfolioProducts = PortfolioProductsSetup::where('is_active',1)
        ->where('ShowInHomePage',1)
        ->get();


        $DPFunctions = DPFunctionSetup::where('IsActive',1)
        ->get();

        return view('services.primaryService',compact('service','portfolioProducts','DPFunctions'));
    }

    public function primaryService2(){
        return view('services.primaryService2');
    }
    public function mutualFund(){
        return view('services.mutualFund');
    }
}
