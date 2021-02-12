<?php

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
/*Route::get('/farmer-add', function () {
    return view('/farmer');
});
*/

Route::get('/','Frontend\FrontendController@index');
Route::get('/about-us','Frontend\FrontendController@aboutus');
//Route::get('/farmer','Frontend\FrontendController@index');

Route::get('/farmer-form','FarmerController@index');
Route::post('/farmer-data','FarmerController@store')->name('farmer-data');

//Route::get('/handicraft-service','Frontend\FrontendController@handicraft');


Route::get('/handicraft-form','HandicraftController@index');
Route::post('/handicraft-data','HandicraftController@store')->name('handicraft-data');

Route::get('/loan','Frontend\FrontendController@loan');
Route::get('/contact-us','Frontend\FrontendController@contactus');
Route::get('/help','Frontend\FrontendController@help');



Route::get('/welcome', function () {
    return view('welcome');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('frontend/index');

Route::get('/farmerlist','FarmerController@display');




Route::group(['middleware' => ['auth','admin']], function(){

   Route::get('/dashboard', function () {
    return view('admin.dashboard');
   });
////////////////////
/// /////////////////
/// ////////////////////
/// ///////////////////////
/// ////////////////

  Route::get('/farmerlist','FarmerController@display');
  Route::get('/farmer-edit/{id}','FarmerController@edit');
  Route::put('/update-farmer-info/{id}','FarmerController@update');


  Route::get('/handicraftlist','HandicraftController@display');


    Route::get('/payment_paid/{id}','PaymentController@submitpayment');
    Route::get('/loan/{id}','PaymentController@index');


   Route::get('/role-register','Admin\DashboardController@registered');
   Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');
   Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');
   Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');
   
   //Route::get('/farmer','FarmerController@index');
   //Route::post('/adddata','FarmerController@store')->name('adddata');
   

});

