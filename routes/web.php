<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogComment;
use App\Http\Controllers\BlogCommentReplyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Front\ContactFormEntryController;
use App\Http\Controllers\Front\FrontServiceController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkprocessController;

;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about-us',[AboutController::class, 'index'])->name('aboutUs');
Route::get('/blogs',[HomeController::class, 'blogindex'])->name('blog.index');
Route::get('/hotels', [HomeController::class, 'hotels'])->name('hotels');
Route::get('/flights', [HomeController::class, 'flights'])->name('flights');
Route::get('/holidays', [HomeController::class, 'holidays'])->name('holidays');
Route::get('/domestic-holidays', [HomeController::class, 'domesticHolidays'])->name('domestic.Holidays');
Route::get('/international-holidays', [HomeController::class, 'internationalHolidays'])->name('international.Holidays');
Route::get('/visa-services', [HomeController::class, 'visaServices'])->name('visaServices');
Route::get('/blogs/{slug}',[HomeController::class, 'blogSingle'])->name('blog.detail');
Route::get('/contact-us',[HomeController::class, 'contact'])->name('contact');
Route::post('/contactFormEntries', [ContactFormEntryController::class, 'storecomment'])->name('contactEntries.store');




Route::get('login',[AuthController::class, 'login'])->name('login');
Route::post('login',[AuthController::class, 'auth_login']);
Route::get('logout', [AuthController::class, 'logout']);


Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'panel'], function () {
        Route::get('/', [AuthController::class, 'login']);
        Route::get('dashboard',[AuthController::class, 'dashboard'])->name('dashboard');

        // Route::get('services/list',[ServiceController::class, 'service'])->name('servicelist');
        // Route::get('services/add',[ServiceController::class, 'add_service']);

        Route::get('pages/list' , 'App\Http\Controllers\PageController@pageList')->name('pageList');
        Route::get('pages/add' , 'App\Http\Controllers\PageController@pageAdd')->name('pageAdd');
        Route::post('pages/add' , 'App\Http\Controllers\PageController@pageStore')->name('pageStore');
        Route::get('page/edit/{id}' , 'App\Http\Controllers\PageController@pageEdit')->name('pageEdit');
        Route::post('page/edit/{id}' , 'App\Http\Controllers\PageController@pageUpdate')->name('pageUpdate');
        
        Route::get('banners/list', 'App\Http\Controllers\BannerController@list')->name('bannerList');
        Route::get('banners/add', 'App\Http\Controllers\BannerController@add')->name('bannerAdd');
        Route::post('banners/add', 'App\Http\Controllers\BannerController@store')->name('bannerStore');
        Route::get('banner/edit/{banner_id}', 'App\Http\Controllers\BannerController@edit')->name('bannerEdit');
        Route::post('banner/edit/{banner_id}', 'App\Http\Controllers\BannerController@update')->name('bannerUpdate');
        Route::get('banner/delete/{banner_id}', 'App\Http\Controllers\BannerController@Delete')->name('bannerDelete');
        

        Route::get('category/list',[CategoryController::class, 'category']);
        Route::get('category/add',[CategoryController::class, 'add_category']);
        Route::post('category/add',[CategoryController::class, 'insert_category']);
        Route::get('category/edit/{id}',[CategoryController::class, 'edit_category']);
        Route::post('category/edit/{id}',[CategoryController::class, 'update_category']);
        Route::get('category/delete/{id}',[CategoryController::class, 'delete_category']);
        

        Route::get('subcategory/list', [SubCategoryController::class, 'subcategory']);
        Route::get('subcategory/add', [SubCategoryController::class, 'add_subcategory']);
        Route::post('subcategory/add', [SubCategoryController::class, 'insert_subcategory']);
        Route::get('subcategory/edit/{id}', [SubCategoryController::class, 'edit_subcategory']);
        Route::post('subcategory/edit/{id}', [SubCategoryController::class, 'update_subcategory']);
        Route::get('subcategory/delete/{id}', [SubCategoryController::class, 'delete_subcategory']);
        
        Route::get('service/list', [ServiceController::class, 'service'])->name('servicelist');
        Route::get('service/add', [ServiceController::class, 'add_service']);
        Route::post('service/add', [ServiceController::class, 'insert_service']);
        Route::get('service/edit/{id}', [ServiceController::class, 'edit_service']);
        Route::post('service/edit/{id}', [ServiceController::class, 'update_service']);
        Route::get('service/delete/{id}', [ServiceController::class, 'delete_service']);

        Route::post('get_sub_category', [SubCategoryController:: class, 'get_sub_category']);
        Route::post('get_edit_sub_category', [SubCategoryController:: class, 'get_edit_sub_category']);
        Route::post('get_service',[ServiceController::class, 'get_service']);
        Route::post('edit_get_service',[ServiceController::class, 'edit_get_service']);
        Route::post('remove_work_attr',[WorkprocessController::class, 'remove_work_attr']);
        

        Route::get('blog/list', [BlogController::class, 'blog'])->name('bloglist');
        Route::get('blog/add', [BlogController::class, 'add_blog']);
        Route::post('blog/add', [BlogController::class, 'insert_blog']);
        Route::get('blog/edit/{id}', [BlogController::class, 'edit_blog']);
        Route::post('blog/edit/{id}', [BlogController::class, 'update_blog']);
        Route::get('blog/delete/{id}', [BlogController::class, 'delete_blog']);
        
        Route::get('blogcategory/list', [BlogCategoryController::class, 'blogcategory']);
        Route::get('blogcategory/add', [BlogCategoryController::class, 'add_blogcategory']);
        Route::post('blogcategory/add', [BlogCategoryController::class, 'insert_blogcategory']);
        Route::get('blogcategory/edit/{id}', [BlogCategoryController::class, 'edit_blogcategory']);
        Route::post('blogcategory/edit/{id}', [BlogCategoryController::class, 'update_blogcategory']);
        Route::get('blogcategory/delete/{id}', [BlogCategoryController::class, 'delete_blogcategory']);

        Route::get('workprocess/list', [WorkprocessController::class, 'workprocess']);
        Route::get('workprocess/add', [WorkprocessController::class, 'add_workprocess']);
        Route::post('workprocess/add', [WorkprocessController::class, 'insert_workprocess']);
        Route::get('workprocess/edit/{id}', [WorkprocessController::class, 'edit_workprocess']);
        Route::post('workprocess/edit/{id}', [WorkprocessController::class, 'update_workprocess']);
        Route::get('workprocess/delete/{id}', [WorkprocessController::class, 'delete_workprocess']);

        Route::get('client/list', [ClientController::class, 'client']);
        Route::get('client/add', [ClientController::class, 'add_client']);
        Route::post('client/add', [ClientController::class, 'insert_client']);
        Route::get('client/edit/{id}', [ClientController::class, 'edit_client']);
        Route::post('client/edit/{id}', [ClientController::class, 'update_client']);
        Route::get('client/delete/{id}', [ClientController::class, 'delete_client']);

        Route::get('contact/list', [ContactController::class, 'contact'])->name('contactlist');
        
        Route::get('blogcomment/list', [BlogComment::class, 'blogcomment']);
        Route::get('blogcomment/active/{id}', [BlogComment::class, 'activecomment']);
        Route::get('blogcomment/deactive/{id}', [BlogComment::class, 'deactivecomment']);
        Route::get('blogcomment/delete/{id}', [BlogComment::class, 'deletecomment']);
        
        Route::get('blogcommentreply/active/{id}', [BlogCommentReplyController::class, 'activecommentreply']);
        Route::get('blogcommentreply/deactive/{id}', [BlogCommentReplyController::class, 'deactivecommentreply']);
        Route::get('blogcommentreply/delete/{id}', [BlogCommentReplyController::class, 'deletecommentreply']);

        Route::get('profilesetting', [UserController::class, 'accountsetting']);
        Route::get('websettings', [UserController::class, 'websetting'])->name('websetting');
        Route::post('websettings', [UserController::class, 'websettingupdate'])->name('websettings.update');

    });

});

Route::get('/{category?}/{subcategory?}/{service?}', [FrontServiceController::class, 'getCat']);