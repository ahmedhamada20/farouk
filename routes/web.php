<?php

use App\Http\Controllers\Front\CustomerLoginController;
use App\Http\Controllers\Front\CustomerRegisterController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\TicketController;
use App\Http\Controllers\Front\TicketController as TicketControllerAlias;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Spatie\Sitemap\SitemapGenerator;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){


        // Login And Register Customer In System

    Route::middleware('guest')->group(function () {
        Route::get('GuestRegister', [CustomerRegisterController::class, 'create'])
            ->name('GuestRegister');

        Route::post('GuestRegister', [CustomerRegisterController::class, 'store']);

        Route::get('GuestLogin', [CustomerLoginController::class, 'create'])
            ->name('GuestLogin');

        Route::post('GuestLogin', [CustomerLoginController::class, 'store']);

    });



  Route::get('/sitemap', function (){
    SitemapGenerator::create('https://faroukgroup.com/')->writeToFile('sitemap.xml');
    return "done site map";

    });
  Route::get('/sitemapIndex', function (){
    SitemapGenerator::create('https://faroukgroup.com/')->writeToFile('sitemap_index.xml');
    return "done site map";

    });

  Route::get('/sitemapIndexwww', function (){
    SitemapGenerator::create('https://www.faroukgroup.com/')->writeToFile('sitemap_indexwww.xml');
    return "done site map";

    });

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/AboutUs-FaroukGroup', [HomeController::class, 'aboutUs'])->name('home.aboutUs');
    Route::get('/Consulting', [HomeController::class, 'consulting'])->name('home.consulting');
    Route::get('/contactUs', [HomeController::class, 'contactUs'])->name('home.contactUs');
    Route::get('/services', [HomeController::class, 'services'])->name('home.services');
     Route::get(LaravelLocalization::transRoute('/servicesDetails/{id}'), [HomeController::class, 'servicesDetails'])->name('home.servicesDetails');
    Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
    Route::get('/Agency', [HomeController::class, 'Agency'])->name('home.Agency');
    Route::get('/blogDetails/{name}', [HomeController::class, 'blogDetails'])->name('home.blogDetails');



    Route::get('/subscriptions/{id}/{package}', [HomeController::class, 'subscriptions'])->name('home.subscriptions');

    Route::post('subscriptions', [HomeController::class, 'subscriptionsPost'])->name('home.subscriptionsPost');

   // surveyaftersale
    Route::get('surveyaftersale', [HomeController::class, 'surveyaftersale'])->name('home.surveyaftersale');
    Route::post('surveyaftersalePost', [HomeController::class, 'surveyaftersalePost'])->name('home.surveyaftersalePost');

    // server 1 Hepa
    Route::get('web_needs', [HomeController::class, 'servery1'])->name('home.servery1asdasd');
    Route::post('servery1_needs_post', [HomeController::class, 'servery1_needs_post'])->name('home.servery1_needs_post');


    Route::get('marketing_needs', [HomeController::class, 'marketing_needs'])->name('home.marketing_needs');
    Route::post('marketing_needs_post', [HomeController::class, 'marketing_needs_post'])->name('home.marketing_needs_post');

    Route::get('/jops', function (){
     return view('front.jops.index');
    })->name('home.jops');

    Route::get('/bloges', function (){
     return view('front.blog.all');
    })->name('home.bloges');

    Route::get('/policy', function (){
     return view('front.policy.index');
    })->name('home.policy');

    Route::get('/surveys', function (){
     return view('front.survey.index');
    })->name('home.survey');

    Route::post('submitNumber',[HomeController::class,'submitNumber'])->name('submitNumber');
    Route::post('sendConsulting',[HomeController::class,'sendConsulting'])->name('sendConsulting');
    Route::post('sendmessage',[HomeController::class,'sendmessage'])->name('sendmessage');
    Route::post('sendcontect',[HomeController::class,'sendcontect'])->name('sendcontect');
    Route::post('sendContactUs',[HomeController::class,'sendContactUs'])->name('sendContactUs');
    Route::post('sendAgency',[HomeController::class,'sendAgency'])->name('sendAgency');
    Route::post('sendJop',[HomeController::class,'sendJop'])->name('sendJop');




});


Route::middleware(['auth:customer','customerCheck'])->group(function (){
    Route::get('/dashboard/customer', [CustomerLoginController::class, 'customer'])->name('/dashboard/customer');
    Route::post('GuestLogout', [CustomerLoginController::class, 'destroy'])
        ->name('GuestLogout');
    Route::resource('tickets', TicketController::class);
    Route::post('ticketsReply', [TicketController::class,'ticketsReply'])->name('ticketsReply');

    Route::get('customerProduct',[CustomerLoginController::class, 'customerProduct'])->name('customerProduct');

    Route::get('profile',[CustomerLoginController::class, 'profile'])->name('profile');
    Route::post('UpdateProfile',[CustomerLoginController::class, 'UpdateProfile'])->name('UpdateProfile');

});


