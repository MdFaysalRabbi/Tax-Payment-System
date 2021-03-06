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

Route::get('/', function () {
    return view('welcome', compact('Tax Payment System'));
});


Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/circle', 'Auth\LoginController@showCircleLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/circle', 'Auth\RegisterController@showCircleRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/circle', 'Auth\LoginController@circleLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/circle', 'Auth\RegisterController@createCircle');


Route::view('/admin', 'admin');
Route::view('/circle', 'circle');

Route::get('/contact', 'ContactController@index');
Route::get('/adminview', 'AdminControl@index');
Route::get('/Test', 'joyController@index');
Route::post('/formsubmit', 'joyController@Test');

Route::get('/Report_genarate','Report_genarate@gen');
Route::get('/Contact','Contact@index');
Route::get('/Tax_Calculation','Tax_Calculation@index');
Route::post('/calculate','TaxcalController@cal');
 // Route::post('/calculate','TaxcalController@Savetax');
//Route::get('/Assessment_Report','Assessment_Report@index');
Route::post('/submit','Assessment_Report@index');
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/sendtax', 'PaymentController@paymentform');
Route::get('/delete/{id}','AdminControl@deleteinfo');

Route::get('/Assessment_Report',function(){
  return view("Assessment_Report");
});
