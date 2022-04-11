<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Admin\JobsController;
use App\Http\Controllers\admin\CompaniesController;
use App\Http\Controllers\front\FinderController;
use App\Http\Controllers\Admin\ContactusController;
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
////////////////////////////front routing
Route::get('/',[FinderController::class,'home']);
Route::get('/home',[FinderController::class,'home']);
Route::get('/AboutUs',[FinderController::class,'AboutUs']);
Route::get('/Acounts',[FinderController::class,'Acounts']);
Route::get('/companies',[FinderController::class,'companies']);
Route::get('/ContactUs',[FinderController::class,'ContactUs']);
Route::get('/job-detials',[FinderController::class,'job-detials']);
Route::get('/job',[FinderController::class,'job']);
Route::get('/Login',[FinderController::class,'Login']);
Route::get('/Our-Services',[FinderController::class,'Services']);
Route::get('/signup',[FinderController::class,'signup']);
Route::get('/mas',[FinderController::class,'mas']);



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
Route::get('/us', function () {
    return view('admin.jobs.listt');
});


 
Route::get('/loginn',[AuthController::class,'showLogin']);
Route::post('/do_login',[AuthController::class,'login'])->name('do_login');

Route::get('/create_user',[AuthController::class,'createUser'])->name('create_user');
Route::post('/save_user',[AuthController::class,'register'])->name('save_user');

// Route::get('/',[DashboardController::class,'dashboard'])->name('home');

Route::get('/show_all_users',[AuthController::class,'listAll'])->name("show_users");
// Route::get('/new_job',[CategoriesController::class,'create'])->name('new_category');


// Route::get('/create_job',[DashboardController::class,'dashboard']);
// // Route::post('/job',[jobControler::class,'register'])->name('save_user');


/////////////////////job route
Route::get('/add_job',[JobsController::class,'Addjob']);
Route::post('/create_job',[JobsController::class,'createjob'])->name('save_job');
Route::get('/edit_job/{job_id}',[JobsController::class,'edit'])->name('edit_job');
Route::get('/toggle_job/{job_id}',[JobsController::class,'toggle'])->name('toggle_job');
Route::post('/update_job/{job_id}',[JobsController::class,'update'])->name('update_job');
Route::get('/list_jobs',[JobsController::class,'index'])->name('list_jobs');


/////////////////////compani route
Route::get('/showall_companies',[CompaniesController::class,'listAll']);
Route::get('/add_companies',[CompaniesController::class,'Addcompany']);
Route::post('/create_companies',[CompaniesController::class,'createcompany'])->name('save_comp');

Route::get('/showall_messege',[ContactusController::class,'listAll']);
Route::post('/create_messege',[ContactusController::class,'createmessege'])->name('save_messege');