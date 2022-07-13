<?php

use App\Http\Controllers\Admin\Api\ApisController;
use App\Http\Controllers\Admin\Auth\LoginControllers;
use App\Http\Controllers\Admin\Auth\RegisterControllers;
use App\Http\Controllers\Admin\Home\HomePageController;
use App\Http\Controllers\Admin\Patient\AddPatientController;
use App\Http\Controllers\Admin\Patient\EditPatientController;
use App\Http\Controllers\Admin\Patient\ListPatientController;
use App\Http\Controllers\Admin\Patient\PatientController;
use App\Http\Controllers\Admin\Patient\ViewPatientController;
use App\Http\Controllers\Admin\Test\EditTestController;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Test\ListController;
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

Route::get('/', function () {return view('home.welcome');})->name('homepage');

Route::get('/admin/register',[RegisterControllers::class,'index'])->name('register');
Route::post('/admin/register',[RegisterControllers::class,'store']);

Route::get('admin/login',[LoginControllers::class,'viewPage'])->name('login');
Route::post('admin/login',[LoginControllers::class,'adminLogin']);


Route::get('user/login',[LoginController::class,'viewPage'])->name('loginuser');
Route::post('user/login',[LoginController::class,'userLogin']);


Route::group(['middleware'=>'login'],function()
{
    Route::get('/admin/home-page',[HomePageController::class,'viewPage'])->name('home');

    Route::get('/admin/list-patients',[PatientController::class,'getPatient'])->name('listpatient');
    
    Route::get('/admin/list-patients/{id}',[PatientController::class,'viewPage'])->name('patient.id');

    Route::get('/admin/delete-patients/{id}',[PatientController::class,'deletePatient'])->name('deletepatient.id');

    Route::get('/admin/add-patients',[PatientController::class,'viewPagePatient'])->name('addpatient');
    
    Route::post('/admin/add-patients',[PatientController::class,'addPatient']);
    
    Route::get('/admin/view-patients',[PatientController::class,'viewPage']);
    
    Route::get('/admin/view-tests/{id}',[PatientController::class,'viewPage'])->name('viewpagetest.id');
    
    Route::get('/admin/add-tests/{id}',[PatientController::class,'viewPageTest'])->name('viewPageTest.id');

    Route::get('/admin/edit-patients/{id}',[PatientController::class,'pageEditPatient'])->name('editpatient.id');

    Route::post ('/admin/edit-patients/{id}',[PatientController::class,'editPatient'])->name('editpatient');
    
    Route::post('/admin/add-tests/{id}',[PatientController::class,'addTest'])->name('addtests.id');
    
    Route::get('/admin/list-tests',[PatientController::class,'getTest'])->name('listtest');

    Route::get('/admin/delete-tests/{id}',[PatientController::class,'deleteTest'])->name('deletetest.id');
    
    Route::get('/admin/edit-tests/{id}',[EditTestController::class,'viewPage'])->name('edittest.id');

    Route::post ('/admin/edit-tests/{id}',[EditTestController::class,'editTest'])->name('edittest');

    Route::get ('/admin/print-tests/{id}',[EditTestController::class,'printTest'])->name('printtest.id');
    
    Route::get('/admin/logout',[LoginControllers::class,'logout'])->name('logout');
    

});

Route::group(['middleware'=>'loginuser'],function()
{

 Route::get('/user/dashboard',[ListController::class,'getTest'])->name('dashboard');
 Route::get('/user/profile',[ListController::class,'myProfile'])->name('profile');
 Route::get('/user/logout',[LoginController::class,'logout'])->name('logoutuser');

});




