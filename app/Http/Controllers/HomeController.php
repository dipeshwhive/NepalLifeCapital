<?php

namespace App\Http\Controllers;

use App\Models\ApproachesSetup;
use App\Models\CompanyProfileSetup;
use App\Models\ConsultationSetup;
use App\Models\FAQSetup;
use App\Models\FeaturesSetup;
use App\Models\GallerySetup;
use App\Models\HomePageSetup;
use App\Models\MutualFundSchemeManagement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;
use Exception;
use App\Models\Newsletter;
use App\Models\NotificationSetup;
use App\Models\PortfolioProductsSetup;
use App\Models\SliderSetup;
use App\Models\TestimonialManagement;
use League\Uri\Components\Port;

class HomeController extends Controller
{
    public function index()
    {

        $sliders = SliderSetup::where('IsActive', 1)
            ->get();

        $mutualFundSchemes = MutualFundSchemeManagement::where('IsActive', 1)
            ->get();

        $aboutUs = CompanyProfileSetup::where('IsActive', 1)
            ->first();

        $home1 = HomePageSetup::where('Slug1', 'first')
            ->where('Is_active', 1)
            ->first();


        $home2 = HomePageSetup::where('Slug2', 'second')
            ->where('Is_active', 1)
            ->first();

        $approaches = ApproachesSetup::where('IsActive', 1)
            ->get();

        $portfolioProducts = PortfolioProductsSetup::where('IsActive', 1)
            ->where('ShowHome', 1)
            ->get();

        $features = FeaturesSetup::where('IsActive', 1)
            ->get();

        $home3 = HomePageSetup::where('Slug3', 'third')
            ->first();

        $home4 = HomePageSetup::where('Slug4', 'fourth')
            ->first();

        $testimonials = TestimonialManagement::where('IsActive', 1)
            ->get();

        // $newsletters = Newsletter::where('is_active', 1)
        //     // ->where('show_in_home', 1)
        //     ->orderBy('id', 'desc')
        //     ->take(8)
        //     ->get();

        $firstGalleryImage = GallerySetup::where('IsActive', 1)
            ->orderBy('id', 'desc')
            ->first();

        $otherGalleryImage = GallerySetup::where('IsActive', 1)
            ->orderBy('id', 'desc')
            ->skip(1)
            ->take(8)
            ->get();

        $faqs =FAQSetup::where('IsActive', 1)
            ->get();

        $consultation = ConsultationSetup::where('IsActive', 1)
            ->first();

        $notifications = NotificationSetup::where('IsActive', 1)
            ->get();

        return view('index', compact(
            'sliders',
            'mutualFundSchemes',
            'aboutUs',
            'home1',
            'approaches',
            'portfolioProducts',
            'features',
            'home2',
            'home3',
            'home4',
            'testimonials',
            
            'faqs',
            'consultation',
            'firstGalleryImage',
            'otherGalleryImage',
            'notifications'
        ));
    }

    public function saveConsultationInquiry(Request $request): JsonResponse
    {
        $response = [
            'status' => False,
            "msg" => "Something went wrong!",
            "result" => []
        ];

        try {

            $validate = Validator::make(
                $request->all(),
                [
                    'name' => 'required|string|max:255',
                    'phone_number' => 'required|digits:10',

                ]
            );

            if ($validate->fails()) {
                $response['result'] = $validate->errors()->toArray();
                throw new Exception("Form Validaton Error");
            }

            DB::table('consultation_inquiry')->insert([
                'name' => $request->name,
                'phone_number' => $request->phone_number,
            ]);

            $response['status'] = True;
            $response['msg'] = "We received your inquiry. We will contact you soon";
        } catch (Exception $e) {

            $response['msg'] = $e->getMessage();
        }
        return response()->json($response);
    }
}
