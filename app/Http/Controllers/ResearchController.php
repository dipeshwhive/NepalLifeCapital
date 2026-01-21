<?php

namespace App\Http\Controllers;

use App\Models\CompanyResearchSetup;
use Illuminate\Support\Facades\DB;


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
        $years = DB::table('years_setup')
            ->where('is_active', 1)
            ->orderBy('id', 'desc')
            ->get();

        $newsletters = DB::table('newsletter')
            ->where('is_active', 1)
            ->get();

        return view('researches.newsletter', compact('years', 'newsletters'));
    }
}
