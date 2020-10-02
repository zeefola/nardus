<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['prefix' => 'v1'] ,function ($router){
   Route::any('/faq_fetch' , 'FaqController@fetch');
   Route::any('/faq_create' , 'FaqController@create');
   Route::any('/faq_update' , 'FaqController@update');
   Route::any('/faq_delete' , 'FaqController@delete');
   Route::any('/faq_download' , 'FaqController@exportable');


   Route::any('/contact_fetch' , 'ContactController@fetch');
   Route::any('/contact_update' , 'ContactController@update');
   Route::any('/contact_delete' , 'ContactController@delete');
   Route::any('/contact_download' , 'ContactController@exportable');

   Route::any('/distributor_fetch' , 'DistributorController@fetch');
   Route::any('/distributor_update' , 'DistributorController@update');
   Route::any('/distributor_delete' , 'DistributorController@delete');
   Route::any('/distributor_download' , 'DistributorController@exportable');
   

});
