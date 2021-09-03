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

//Route::get('/', function () {
   // return view('welcome');
//});


// definition des route associés pour affichage du formulaire 
Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

// creation de route password forgotten et reset

Route::get('/forget-password', 'ForgotPasswordController@getEmail')->name('getEmail');
Route::post('/forget-password', 'ForgotPasswordController@postEmail')->name('postEmail');

// rest password

Route::get('/reset-password/{token}', 'ResetPasswordController@getPassword');
Route::post('/reset-password', 'ResetPasswordController@updatePassword');
