<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/contactus/{id?}', [ApiController::class, 'contactus']);
Route::post('/addcontact', [ApiController::class, 'addcontact']);
Route::put('/updatecontact', [ApiController::class, 'updatecontact']);
Route::get('/searchcontact/{name}', [ApiController::class, 'searchcontact']);
Route::delete('/deletecontact/{id}', [ApiController::class, 'deletecontact']);





