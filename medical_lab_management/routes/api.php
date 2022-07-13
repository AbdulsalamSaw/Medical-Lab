<?php

use App\Http\Controllers\Admin\Api\ApisController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




Route::get('/listpatient/{id}', [ApisController::class, 'getPatient']);
Route::post('/addpatient',[ApisController::class,'createPatient']);
Route::delete('/deletepatient/{id}',[ApisController::class,'deletePatient']);
