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

Auth::routes();
// website
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/coures', [App\Http\Controllers\HomeController::class, 'coures'])->name('coures');
Route::get('/team', [App\Http\Controllers\HomeController::class, 'team'])->name('team');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

// admin
Route::get('/slider', [App\Http\Controllers\HomeController::class, 'slider'])->name('slider');
Route::post('/addslider', [App\Http\Controllers\HomeController::class, 'addslider'])->name('addslider');
Route::get('/deleteslider/{id}', [App\Http\Controllers\HomeController::class, 'deleteslider'])->name('deleteslider');
Route::get('/editslider/{id}', [App\Http\Controllers\HomeController::class, 'editslider'])->name('editslider');
Route::post('/updateslider/{id}', [App\Http\Controllers\HomeController::class, 'updateslider'])->name('updateslider');

Route::get('/ourcoures', [App\Http\Controllers\HomeController::class, 'ourcoures'])->name('ourcoures');
Route::post('/addourcoures', [App\Http\Controllers\HomeController::class, 'addourcoures'])->name('addourcoures');
Route::get('/deleteourcoures/{id}', [App\Http\Controllers\HomeController::class, 'deleteourcoures'])->name('deleteourcoures');
Route::get('/editourcoures/{id}', [App\Http\Controllers\HomeController::class, 'editourcoures'])->name('editourcoures');
Route::post('/updateourcoures/{id}', [App\Http\Controllers\HomeController::class, 'updateourcoures'])->name('updateourcoures');

Route::post('/addcontact', [App\Http\Controllers\HomeController::class, 'addcontact'])->name('addcontact');
Route::get('/contactus', [App\Http\Controllers\HomeController::class, 'contactus'])->name('contactus');
Route::get('/deletecontact{id}', [App\Http\Controllers\HomeController::class, 'deletecontact'])->name('deletecontact');










