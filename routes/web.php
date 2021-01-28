<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('admin/home', 'App\Http\Controllers\HomeController@handleAdmin')->name('admin.route')->middleware('admin');
Route::get('admin/donation', 'App\Http\Controllers\donationController@index')->name('donation.route');
Route::get('admin/vulnerable', 'App\Http\Controllers\VulnerableController@index')->name(' Vulnerable.route');

Route::get('admin/show', 'App\Http\Controllers\AgencyController@index')->name('Agency.route');
//Route::get('admin/donation', 'App\Http\Controllers\donationController@index')->name('donation.route');
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/homepage', function () {
    return view('homepage');

});
Route::get('admin/reports', function () {
    return view('reports');
    
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dash');
Route::get('/', function () {
    return view('homepage');
});
Route::get('about', function () {
    return view('about');
});

Route::get('/admin/CreateAgency', function () {
   return view('CreateAgency');
  });

Route::get('/admin/CreateVulnerable', function () {
   return view('CreateVulnerable');
  });
  Route::get('/admin/pickdonation', function () {
    return view('pickdonation');
   });
//FOR DONATION


Route::get('/donation', 'App\Http\Controllers\donationController@create')->name('donation');

Route::post('/donateCreate', 'App\Http\Controllers\donationController@store')->name('donation.store');

Route::view('/donateCreate', 'donateCreate')->middleware('auth');

Route::get('/edit/donation/{id}','App\Http\Controllers\donationController@edit');

Route::post('/edit/donation/{id}', 'App\Http\Controllers\donationController@update');

Route::delete('/delete/donation/{id}','App\Http\Controllers\donationController@destroy');


//FOR AGENCIES 
//Route::resource('agencies', 'App\Http\Controllers\AgencyController');
Route::get('show', 'App\Http\Controllers\AgencyController@create')->name('show');

Route::post('/CreateAgency', 'App\Http\Controllers\AgencyController@store')->name('Agency.store');

//Route::view('/donateCreate', 'donateCreate')->middleware('auth');

Route::get('/edit/Agency/{id}','App\Http\Controllers\AgencyController@edit');

Route::post('/edit/Agency/{id}', 'App\Http\Controllers\AgencyController@update');

Route::delete('/delete/Agency/{id}','App\Http\Controllers\AgencyController@destroy');

//For Vulnerable 

Route::resource('vulnerables', 'App\Http\Controllers\VulnerableController');
Route::get('vulnerable', 'App\Http\Controllers\VulnerableController@create')->name('vulnerable');

Route::post('/createvulnerable', 'App\Http\Controllers\VulnerableController@store')->name('Vulnerable.store');
Route::get('/edit/Vulnerable/{id}','App\Http\Controllers\VulnerableController@edit');

Route::post('/edit/Vulnerable/{id}', 'App\Http\Controllers\VulnerableController@update');

Route::delete('/delete/Vulnerable/{id}','App\Http\Controllers\VulnerableController@destroy');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//FOR PICK DONATION

Route::get('/admin/pickdonation', 'App\Http\Controllers\pickdonationController@create');

//Route::get('pickeddonation', 'App\Http\Controllers\pickdonationController@show');

;

