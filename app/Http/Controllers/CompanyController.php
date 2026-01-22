<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\FAQSetup;
use App\Models\MessageCP;
use App\Models\ContactList;
use Illuminate\Http\Request;
use App\Models\FeaturesSetup;
use App\Models\HomePageSetup;
use App\Models\PrivacyPolicy;
use App\Models\ManagementTeam;
use App\Models\BoardOfDirector;
use App\Models\GalleryCategory;
use App\Models\ObjectivesSetup;
use App\Models\OurProcessSetup;
use App\Models\TermsConditions;
use App\Models\PMSDocumentSetup;
use App\Models\ConsultationSetup;
use App\Models\CompanyProfileSetup;
use App\Models\TestimonialManagement;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    public function companyProfile()
    {

        $aboutUs = CompanyProfileSetup::where('IsActive', 1)->first();

        $objectives = ObjectivesSetup::where('IsActive', 1)->get();

        $home1 = HomePageSetup::where('Slug1', 'first')
            ->where('Is_active', 1)
            ->first();

        $home3 = HomePageSetup::where('Slug3', 'third')
            ->first();

        $faqs =FAQSetup::where('IsActive', 1)
            ->get();

        $features = FeaturesSetup::where('IsActive', 1)
            ->get();

        $consultation =ConsultationSetup::where('IsActive', 1)
            ->first();

        return view('company.companyProfile', compact('aboutUs', 'objectives', 'home1', 'home3', 'faqs', 'features', 'consultation'));
    }

    public function boardOfDirector()
    {
        $directors = BoardOfDirector::where('Is Active', 1)
            ->get();

        $faqs = FAQSetup::where('IsActive', 1)
            ->get();

        $consultation = ConsultationSetup::where('IsActive', 1)
            ->first();

        return view('company.boardOfDirector', compact('directors', 'faqs', 'consultation'));
    }

    public function managementTeam()
    {

        $managingTeams = ManagementTeam::where('IsActive', 1)
            ->orderBy('Position', 'asc')
            ->get();

        $faqs = FAQSetup::where('IsActive', 1)
            ->get();

        $consultation = ConsultationSetup::where('IsActive', 1)
            ->first();

        return view('company.managementTeam', compact('managingTeams', 'faqs', 'consultation'));
    }

    public function photoGallery()
    {

        $photoCategory = GalleryCategory::where('IsActive', 1)
            ->get();
        

        return view('company.photoGallery', compact('photoCategory'));
    }

    public function messageFromChairman()
    {

        $message = MessageCP::where('Is_Active', 1)
            ->first();

        $faqs = FAQSetup::where('IsActive', 1)
            ->get();

        return view('company.messageFromChairman', compact('message', 'faqs'));
    }

    public function testimonial()
    {
        $testimonials = TestimonialManagement::where('IsActive', 1)
            ->get();
        return view('company.testimonials', compact('testimonials'));
    }

    public function privacyPolicies()
    {
        $privacyAndPolicy = PrivacyPolicy::where('IsActive', 1)
            ->first();

        return view('company.privacyPolicies', compact('privacyAndPolicy'));
    }

    public function termsAndCondition()
    {
        $termsAndCondition = TermsConditions::where('IsActive', 1)
            ->first();
        return view('company.termsAndCondition', compact('termsAndCondition'));
    }

    public function contact()
    {


        return view('company.contact');
    }

    public function process()
    {
        $ourProcess = OurProcessSetup::where('IsActive', 1)
            ->get();

        $pmsDocument = PMSDocumentSetup::where('IsActive', 1)
            ->get();

        return view('company.ourProcess', compact('ourProcess', 'pmsDocument'));
    }

    public function insertContact(Request $request)
    {

        $response = [
            'response' => False,
            "message" => "Something went wrong!",
            "result" => ""
        ];
        try {
            $validatedData = Validator::make($request->all(), [
                'full_name' => 'required|string|max:255',
                'email' => 'required|email',
                'phone_number' => 'required|numeric|digits:10',
                'message' => 'required|string|max:255',
            ]);
            if ($validatedData->fails()) {
                $response['result'] = $validatedData->errors()->toArray();
                throw new Exception("Form Validation Error");
            }

            ContactList::create([
                'name' => $validatedData->validated()['full_name'],
                'email' => $validatedData->validated()['email'],
                'phone_number' => $validatedData->validated()['phone_number'],
                'message' => $validatedData->validated()['message'],
            ]);

            $response['response'] = True;
            $response['message'] = "We received your message. We will contact you soon";
        } catch (Exception $e) {
            $response['message'] = $e->getMessage();
        }

        return response()->json($response);
    }

    public function FAQList(Request $request)
    {
        // dd($request->all());

        $faqs = FAQSetup::where('CategoryId', $request->categoryId)
            ->where('IsActive', 1)
            ->get();
        // dd($faqs);
        $view = view('company.FAQList', compact('faqs'))->render();



        return response()->json([
            'data' => $view,
            'status' => true
        ]);
    }
}
