<?php

namespace App\Http\Controllers;

use App\Models\Years;
use App\Models\Newsletter;
use Illuminate\Support\Facades\DB;
use App\Models\CompanyResearchSetup;


class ResearchController extends Controller
{
    public function companyResearch()
    {

        $companyResearches = CompanyResearchSetup::where('IsActive', 1)
            ->get();


        return view('researches.companyResearch', compact('companyResearches'));
    }

    public function newsletter()
    {
        $years = Years::where('is_active', 1)
            ->orderBy('id', 'desc')
            ->get();

        $newsletters = Newsletter::where('is_active', 1)
            ->get();

        return view('researches.newsletter', compact('years', 'newsletters'));
    }
}
