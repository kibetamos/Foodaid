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
//Route::get('/testing',function(){
//	return 'just for test';

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dash');
Route::get('home', function () {
    return view('home');
});
Route::get('about', function () {
    return view('about');
});
Route::get('donate', function () {
    return view('donateCreate');
});
Route::get('/CreateAgency', function () {
   return view('CreateAgency');
  });

Route::get('/vulnerable', function () {
   return view('vulnerable');
  });

//FOR DONATION

Route::get('/donation', 'App\Http\Controllers\donationController@create')->name('donation');

Route::post('/donateCreate', 'App\Http\Controllers\donationController@store')->name('donation.store');

Route::view('/donateCreate', 'donateCreate')->middleware('auth');

Route::get('/edit/{id}','App\Http\Controllers\donationController@edit');

Route::post('/donationEdit', 'App\Http\Controllers\donationController@update');

Route::delete('/delete/donation/{id}','App\Http\Controllers\donationController@destroy');


//FOR AGENCIES 
//Route::resource('agencies', 'App\Http\Controllers\AgencyController');
Route::get('show', 'App\Http\Controllers\AgencyController@create')->name('show');

Route::post('/CreateAgency', 'App\Http\Controllers\AgencyController@store')->name('Agency.store');

//Route::view('/donateCreate', 'donateCreate')->middleware('auth');

Route::get('/edit/{id}','App\Http\Controllers\AgencyController@edit');

Route::post('/edit', 'App\Http\Controllers\AgencyController@update');

Route::delete('/delete/Agency/{id}','App\Http\Controllers\AgencyController@destroy');

//For Vulnerable 
Route::resource('Vulnerable', 'App\Http\Controllers\VulnerableController');
//Route::resource('vulnerables', 'App\Http\Controllers\VulnerableController');
//Route::post('/CreateVulnerable', 'App\Http\Controllers\VulnerableController@store')->name('Vulnerable.store');
