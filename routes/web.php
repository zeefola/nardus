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
    return view('welcome');
});

Route::get('/contact-us' , 'homepageController@contactUs');
Route::get('/about-us' , 'homepageController@aboutUs');
Route::get('/services' , 'homepageController@services');
Route::get('/faq' , 'homepageController@faq');
Route::get('/service-details' , 'homepageController@servicesDetails');
Route::get('/distributors-form' , 'homepageController@distributorsForm');




Route::post('/contact-us' , 'homepageController@contactusConfirm');
Route::post('/distributors-form' , 'homepageController@distributorsFormConfirm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
