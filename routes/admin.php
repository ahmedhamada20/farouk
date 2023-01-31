<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdsController;
use App\Http\Controllers\Admin\BestSellerController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CertificatesController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CustomerReviewsController;
use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\ExamController;
use App\Http\Controllers\Admin\FeaturesPackagesController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\NumberController;
use App\Http\Controllers\Admin\PackagesController;
use App\Http\Controllers\Admin\PreviousWorkController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\RequestTicksController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ZoomController;
use Illuminate\Support\Facades\Route;

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

require __DIR__ . '/auth.php';

Route::get('information', [HomeController::class, 'information'])->name('information');
Route::post('settingSave', [SettingController::class, 'store'])->name('settingSave');


Route::middleware(['auth', 'checkInformation'])->group(function () {

    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::get('setting', [SettingController::class, 'index'])->name('setting');
    Route::post('setting/{id}', [SettingController::class, 'update'])->name('setting.update');
    Route::post('setting_remove_image', [SettingController::class, 'setting_remove_image'])->name('setting_remove_image');

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);

    Route::resource('customers',CustomersController::class);
    Route::get('customersWaiting',[CustomersController::class,'waiting'])->name('customers.waiting');
    Route::post('customersChange',[CustomersController::class,'customersChange'])->name('customersChange');

    Route::resource('ads', AdsController::class);
    Route::get('updateAdsStatus', [AdsController::class, 'changeStatus'])->name('updateAdsStatus');
    Route::post('ads_photo_remove_image', [AdsController::class, 'ads_photo_remove_image'])->name('ads_photo_remove_image');

    Route::resource('news', NewsController::class);
    Route::get('updateNewsStatus', [NewsController::class, 'changeStatus'])->name('updateNewsStatus');
    Route::post('news_photo_remove_image', [NewsController::class, 'news_photo_remove_image'])->name('news_photo_remove_image');

    Route::resource('event', EventController::class);
    Route::get('updateEventStatus', [EventController::class, 'changeStatus'])->name('updateEventStatus');
    Route::post('event_photo_remove_image', [EventController::class, 'event_photo_remove_image'])->name('event_photo_remove_image');

    Route::resource('slider', SliderController::class);
    Route::get('updateSliderStatus', [SliderController::class, 'changeStatus'])->name('updateSliderStatus');
    Route::post('slider_photo_remove_image', [SliderController::class, 'slider_photo_remove_image'])->name('slider_photo_remove_image');

    Route::resource('aboutUs', AboutUsController::class);
    Route::get('/updateaboutusstatus', [AboutUsController::class, 'changeStatus'])->name('updateaboutusstatus');
    Route::post('aboutUs_remove_image', [AboutUsController::class, 'aboutUs_remove_image'])->name('aboutUs_remove_image');
    Route::post('aboutUs_photo_remove_image', [AboutUsController::class, 'aboutUs_photo_remove_image'])->name('aboutUs_photo_remove_image');

    Route::resource('previousWork', PreviousWorkController::class);
    Route::get('updatePreviousWorkStatus', [PreviousWorkController::class, 'changeStatus'])->name('updatePreviousWorkStatus');
    Route::post('previousWork_remove_image', [PreviousWorkController::class, 'previousWork_remove_image'])->name('previousWork_remove_image');
    Route::post('previousWork_photo_remove_image', [PreviousWorkController::class, 'previousWork_photo_remove_image'])->name('previousWork_photo_remove_image');

    Route::resource('packages', PackagesController::class);
    Route::resource('featuresPackages', FeaturesPackagesController::class);
    Route::get('updatePackagesStatus', [PackagesController::class, 'changeStatus'])->name('updatePackagesStatus');
    Route::post('packages_photo_remove_image', [PackagesController::class, 'packages_photo_remove_image'])->name('packages_photo_remove_image');

    Route::resource('category', CategoryController::class);
    Route::post('import-category', [CategoryController::class, 'import_category'])->name('import-category');

    Route::post('category_photo_remove_image', [CategoryController::class, 'category_photo_remove_image'])->name('category_photo_remove_image');

    Route::get('updateCategoryStatus', [CategoryController::class, 'changeStatus'])->name('updateCategoryStatus');
    Route::post('question_remove_image', [CategoryController::class, 'question_remove_image'])->name('question_remove_image');
    Route::post('question_photo_remove_image', [CategoryController::class, 'question_photo_remove_image'])->name('question_photo_remove_image');

    Route::resource('course', CourseController::class);
    Route::get('updateCourseStatus', [CourseController::class, 'changeStatus'])->name('updateCourseStatus');
    Route::post('course_remove_image', [CourseController::class, 'course_remove_image'])->name('course_remove_image');
    Route::post('course_photo_remove_image', [CourseController::class, 'course_photo_remove_image'])->name('course_photo_remove_image');
    Route::post('deletedCotacusUs/{id}',[AdminController::class,'deletedCotacusUs'])->name('deletedCotacusUs');



    Route::resource('number', NumberController::class);
    Route::get('updateNumberStatus', [NumberController::class, 'changeStatus'])->name('updateNumberStatus');
    Route::post('number_photo_remove_image', [NumberController::class, 'number_photo_remove_image'])->name('number_photo_remove_image');


    Route::resource('gallery', GalleryController::class);
    Route::get('updateGalleryStatus', [GalleryController::class, 'changeStatus'])->name('updateGalleryStatus');
    Route::post('gallery_remove_image', [GalleryController::class, 'gallery_remove_image'])->name('gallery_remove_image');
    Route::post('gallery_photo_remove_image', [GalleryController::class, 'gallery_photo_remove_image'])->name('gallery_photo_remove_image');

    Route::resource('blog', BlogController::class);
    Route::get('updateBlogStatus', [BlogController::class, 'changeStatus'])->name('updateBlogStatus');
    Route::post('blog_remove_image', [BlogController::class, 'blog_remove_image'])->name('blog_remove_image');
    Route::post('blog_photo_remove_image', [BlogController::class, 'blog_photo_remove_image'])->name('blog_photo_remove_image');


    Route::resource('zoom',ZoomController::class);

    Route::resource('exam',ExamController::class);
    Route::get('updateExamStatus', [ExamController::class, 'changeStatus'])->name('updateExamStatus');




    Route::resource('product', ProductController::class);
    Route::get('updateProductStatus', [ProductController::class, 'changeStatus'])->name('updateProductStatus');
    Route::post('product_remove_image', [ProductController::class, 'product_remove_image'])->name('product_remove_image');
    Route::post('product_photo_remove_image', [ProductController::class, 'product_photo_remove_image'])->name('product_photo_remove_image');


    Route::resource('customerReviews', CustomerReviewsController::class);
    Route::get('updateCustomerReviewsStatus', [CustomerReviewsController::class, 'changeStatus'])->name('updateCustomerReviewsStatus');
    Route::post('customerReviews_remove_image', [CustomerReviewsController::class, 'customerReviews_remove_image'])->name('customerReviews_remove_image');
    Route::post('customerReviews_photo_remove_image', [CustomerReviewsController::class, 'customerReviews_photo_remove_image'])->name('customerReviews_photo_remove_image');


    Route::get('affterSalrees',[AdminController::class,'affterSalrees'])->name('affterSalrees');
    Route::get('affterSalreesHepa',[AdminController::class,'affterSalreesHepa'])->name('affterSalreesHepa');
    Route::get('affterSalreesHepaSSSS',[AdminController::class,'affterSalreesHepaSSSS'])->name('affterSalreesHepaSSSS');

    Route::post('affterSalreesDeleted',[AdminController::class,'affterSalreesDeleted'])->name('affterSalreesDeleted');
    Route::post('affterSalreesHepadeleted',[AdminController::class,'affterSalreesHepadeleted'])->name('affterSalreesHepadeleted');
    Route::post('affterSalreesHepaSSSSDEleted',[AdminController::class,'affterSalreesHepaSSSSDEleted'])->name('affterSalreesHepaSSSSDEleted');

    Route::get('domload_affterSalrees',[AdminController::class,'domload_affterSalrees'])->name('domload_affterSalrees');
    Route::get('domload_affterSalreesHepa',[AdminController::class,'domload_affterSalreesHepa'])->name('domload_affterSalreesHepa');
    Route::get('domload_affterSalreesHepaSSSS',[AdminController::class,'domload_affterSalreesHepaSSSS'])->name('domload_affterSalreesHepaSSSS');


    Route::get('serversIndex',[AdminController::class,'serversIndex'])->name('serversIndex');
    Route::get('whatsapp',[AdminController::class,'whatsapp'])->name('whatsapp');
    Route::get('supcpations',[AdminController::class,'supcpations'])->name('supcpations');
    Route::get('consultingIndex',[AdminController::class,'consultingIndex'])->name('consultingIndex');
    Route::get('agencyIndex',[AdminController::class,'AgencyIndex'])->name('agencyIndex');
    Route::get('jopsIndex',[AdminController::class,'jopsIndex'])->name('jopsIndex');
    Route::get('conteactIndex',[AdminController::class,'conteactIndex'])->name('conteactIndex');
    Route::get('conteactMessageIndex',[AdminController::class,'conteactMessageIndex'])->name('conteactMessageIndex');
    Route::get('downloadMesageContect',[AdminController::class,'downloadMesageContect'])->name('downloadMesageContect');
    Route::get('downloadContect',[AdminController::class,'downloadContect'])->name('downloadContect');
    Route::get('downloadConsultingExport',[AdminController::class,'downloadConsultingExport'])->name('downloadConsultingExport');
    Route::get('downloadAgencyExport',[AdminController::class,'downloadAgencyExport'])->name('downloadAgencyExport');
    Route::get('downloadJobsExport',[AdminController::class,'downloadJobsExport'])->name('downloadJobsExport');
    Route::get('dowmnloadSubcraptionExport',[AdminController::class,'dowmnloadSubcraptionExport'])->name('dowmnloadSubcraptionExport');
    Route::get('downloadWhatsapp',[AdminController::class,'downloadWhatsapp'])->name('downloadWhatsapp');
    Route::get('dowmnloadCustomerExport',[AdminController::class,'dowmnloadCustomerExport'])->name('dowmnloadCustomerExport');
    Route::get('downloadServres',[AdminController::class,'downloadServres'])->name('downloadServres');
    Route::post('deletedSubcraption/{id}',[AdminController::class,'deletedSubcraption'])->name('deletedSubcraption');


    // Route::resource('bestSeller', BestSellerController::class);
    // Route::get('updateBestSellerStatus', [BestSellerController::class, 'changeStatus'])->name('updateBestSellerStatus');
    // Route::post('bestSeller_photo_remove_image', [BestSellerController::class, 'bestSeller_photo_remove_image'])->name('bestSeller_photo_remove_image');



     Route::resource('question', QuestionController::class);
     Route::get('updateQuestionStatus', [QuestionController::class, 'changeStatus'])->name('updateQuestionStatus');
     Route::post('question_remove_image', [QuestionController::class, 'question_remove_image'])->name('question_remove_image');
     Route::post('question_photo_remove_image', [QuestionController::class, 'question_photo_remove_image'])->name('question_photo_remove_image');

     Route::resource('requestTicks',RequestTicksController::class);

});
