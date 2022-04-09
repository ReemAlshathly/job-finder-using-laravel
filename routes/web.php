<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\CompaniesController;
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
Route::get('/index', function () {
    return view('front.index');
});
Route::get('/AboutUs', function () {
    return view('front.AboutUs');
});
Route::get('/Acounts', function () {
    return view('front.UserAcounts');
});
Route::get('/companies', function () {
    return view('front.companies');
});
Route::get('/ContactUs', function () {
    return view('front.ContactUs');
});
Route::get('/job-detials', function () {
    return view('front.job-detials');
});
Route::get('/job', function () {
    return view('front.job');
});
Route::get('/Login', function () {
    return view('front.Login');
});
Route::get('/Our-Services', function () {
    return view('front.Our-Services');
});
Route::get('/signup', function () {
    return view('front.signup');
});
Route::get('/mas', function () {
    return view('front.header');
});
Route::get('/userAcounts', function () {
    return view('front.Acounts');
});
Route::get('/dashboard', function () {
return view('admin.layout.master');
});

///////////////////Advertisment
Route::get('/add_adv', function () {
    return view('admin.Advartisment.create');
});
Route::get('/showall_adv', function () {
    return view('admin.Advartisment.list_all');
});
////////////////////////////companies
Route::get('/add_companies', function () {
    return view('admin.companies.create');
});
Route::get('/add_services', function () {
return view('admin.services.create');
});
Route::get('/showall_services', function () {
    return view('admin.services.list_all');
});
Route::get('/add_job', function () {
    return view('admin.jobs.create');
    });
 Route::get('/showall_job', function () {
        return view('admin.jobs.list_all');
    });
 
Route::get('/loginn',[AuthController::class,'showLogin']);
Route::post('/do_login',[AuthController::class,'login'])->name('do_login');

Route::get('/create_user',[AuthController::class,'createUser'])->name('create_user');
Route::post('/save_user',[AuthController::class,'register'])->name('save_user');

Route::get('/',[DashboardController::class,'dashboard'])->name('home');

Route::get('/show_all_users',[AuthController::class,'listAll'])->name("show_users");
Route::get('/new_job',[CategoriesController::class,'create'])->name('new_category');


// Route::get('/create_job',[DashboardController::class,'dashboard']);
// // Route::post('/job',[jobControler::class,'register'])->name('save_user');

Route::get('/create_job',[CompaniesController::class,'create']);
Route::get('/page',[JobsController::class,'index']);