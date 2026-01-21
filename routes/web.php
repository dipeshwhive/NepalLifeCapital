<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/store-consultation-inquiry', [HomeController::class, 'saveConsultationInquiry'])->name('saveConsultationInquiry');

//company
Route::get('/company-profile', [CompanyController::class, 'companyProfile'])->name('companyProfile');
Route::get('/board-of-director', [CompanyController::class, 'boardOfDirector'])->name('boardOfDirector');
Route::get('/management-team', [CompanyController::class, 'managementTeam'])->name('managementTeam');
Route::get('/photo-gallery', [CompanyController::class, 'photoGallery'])->name('photoGallery');
Route::get('/message-from-chairman', [CompanyController::class, 'messageFromChairman'])->name('messageFromChairman');
Route::get('/testimonials', [CompanyController::class, 'testimonial'])->name('testimonial');
Route::get('/terms-and-condition', [CompanyController::class, 'termsAndCondition'])->name('termsAndCondition');
Route::get('/privacy-policy', [CompanyController::class, 'privacyPolicies'])->name('privacyPolicies');
Route::get('/contact', [CompanyController::class, 'contact'])->name('contact');
Route::post('/save-contact', [CompanyController::class, 'insertContact'])->name('insertContact');
Route::get('/companyProcess', [CompanyController::class, 'process'])->name('companyProcess');
Route::get('/faq-list', [CompanyController::class, 'FAQList'])->name('getFaqList');

//service
Route::get('/primary-service/{slug}', [ServiceController::class, 'primaryService'])->name('primaryService');
Route::get('/depository-participant', [ServiceController::class, 'primaryService2'])->name('primaryService2');
Route::get('/mutual-fund', [ServiceController::class, 'mutualFund'])->name('mutualFund');

//research
Route::get('/company-research', [ResearchController::class, 'companyResearch'])->name('companyResearch');
Route::get('/newsletter', [ResearchController::class, 'newsletter'])->name('newsletter');

//publication
Route::get('/notices', [PublicationController::class, 'notices'])->name('notices');
Route::get('/prospectus', [PublicationController::class, 'prospectus'])->name('prospectus');
Route::get('/NAV-reports', [PublicationController::class, 'NAVReports'])->name('NAVReports');
Route::get('/mutual-fund-reports', [PublicationController::class, 'mutualFundReports'])->name('mutualFundReports');

Route::get('/buy-calculator', [CalculatorController::class, 'buyCalculator'])->name('buyCalculator');
Route::get('/sell-calculator', [CalculatorController::class, 'sellCalculator'])->name('sellCalculator');
Route::get('/SIP-calculator', [CalculatorController::class, 'sipCalculator'])->name('sipCalculator');
Route::get('/bonus-tax-calculator', [CalculatorController::class, 'bonusTaxCalculator'])->name('bonusTaxCalculator');
Route::get('/right-share-price-calculation', [CalculatorController::class, 'rightSharePriceCalculation'])->name('rightSharePriceCalculation');
Route::get('/bonus-share-calculator', [CalculatorController::class, 'bonusShareCalculator'])->name('bonusShareCalculator');


Route::get('/event-list', [EventController::class, 'eventIndex'])->name('eventsList');
Route::get('/event-detail/{slug}', [EventController::class, 'eventDetail'])->name('eventDetail');

Route::get('/form-list', [FormController::class, 'formIndex'])->name('form');
Route::get('/forms', [FormController::class, 'getFormList'])->name('getFormList');
