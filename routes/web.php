<?php

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

Route::get('/', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('index');
});
Route::get('/AboutUs', function () {
    return view('AboutUs');
});
Route::get('/Acounts', function () {
    return view('Acounts');
});
Route::get('/companies', function () {
    return view('companies');
});
Route::get('/ContactUs', function () {
    return view('ContactUs');
});
Route::get('/job-detials', function () {
    return view('job-detials');
});
Route::get('/job', function () {
    return view('job');
});
Route::get('/Login', function () {
    return view('Login');
});
Route::get('/Our-Services', function () {
    return view('Our-Services');
});
Route::get('/signup', function () {
    return view('signup');
});
