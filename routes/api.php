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
   Route::post('/faq_fetch' , 'FaqController@fetch');
   Route::post('/faq_create' , 'FaqController@create');
   Route::post('/faq_update' , 'FaqController@update');
   Route::post('/faq_delete' , 'FaqController@delete');
   Route::post('/faq_export' , 'FaqController@exportable');


   Route::post('/contact_fetch' , 'ContactController@fetch');
   Route::post('/contact_update' , 'ContactController@update');
   Route::post('/contact_delete' , 'ContactController@delete');
   Route::post('/contact_export' , 'ContactController@exportable');

   Route::post('/distributor_fetch' , 'DistributorController@fetch');
   Route::post('/distributor_update' , 'DistributorController@update');
   Route::post('/distributor_delete' , 'DistributorController@delete');
   Route::post('/distributor_export' , 'DistributorController@exportable');
   

});
