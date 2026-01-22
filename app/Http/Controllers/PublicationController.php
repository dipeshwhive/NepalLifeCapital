<?php

namespace App\Http\Controllers;

use App\Models\ConsultationSetup;
use App\Models\MutualFundReportsSetup;
use App\Models\NavReportCategory;
use App\Models\NoticeSetup;
use App\Models\ProspectusSetup;

class PublicationController extends Controller
{
    public function notices(){

        $notices = NoticeSetup::where('IsActive',1)
        ->orderBy('id','desc')  
        ->get();

        $consultation = ConsultationSetup::where('IsActive',1)
        ->first();

        return view('publication.notices',compact('notices','consultation'));
    }
    public function prospectus(){

        $prospectuses = ProspectusSetup::where('IsActive',1)
        ->orderBy('id','desc')
        ->get();


        return view('publication.prospectus',compact('prospectuses'));
    }

    public function NAVReports(){

        $navReportCategory = NavReportCategory::where('IsActive',1)
        ->get();

        $consultation = ConsultationSetup::where('IsActive',1)
        ->first();

        return view('publication.NAVReports',compact('navReportCategory','consultation'));
    }

    public function mutualFundReports(){

        $mutualFundReports = MutualFundReportsSetup::where('IsActive',1)
        ->get();

        $consultation = ConsultationSetup::where('IsActive',1)
        ->first();

        return view('publication.mutualFundReports',compact('mutualFundReports','consultation'));
    }

}
