<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Front\UsersController;
use App\Http\Controllers\Admin\ManufacturerController;
use App\Http\Controllers\Admin\MedicinesController;
use App\Http\Controllers\Front\ProductController;
use App\Http\Controllers\Front\OrderController;

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

Route::get('/', function (){
    return view('welcome');
});

Route::get('admin',[AdminController::class,'index']);
Route::post('admin/auth',[AdminController::class,'auth']);

Route::get('admin/dashboard',[AdminController::class,'dashboard'])->middleware('admin');
    //Manufacturer
Route::get('admin/manufacturers',[ManufacturerController::class,'manufacturers']);

//medicine  
Route::get('admin/medicines',[MedicinesController::class,'medicines']);
Route::match(['get','post'],'admin/add-edit-medicine/{id?}',[MedicinesController::class,'addEditMedicine']);
Route::match(['get','post'],'admin/delete-medicine/{id?}',[MedicinesController::class,'deleteMedicine']);

//UserCOntrollers routes
Route::get('/autoorder',[UsersController::class,'autoorder']);
Route::get('/account',[UsersController::class,'account']);
Route::get('/addedit',[AdminController::class,'addedit']);

//Usercontrollers
Route::get('/login-page',[UsersController::class,'loginPage']);
Route::get('/registration-page',[UsersController::class,'registrationPage']);
Route::post('/clogin',[UsersController::class,'loginUser']);
Route::post('/cregister',[UsersController::class,'registerUser']);
Route::get('/logout',[UsersController::class,'logout']);

//user account
Route::match(['GET', 'POST'],'/account',[UsersController::class,'account']);

//productcontroller 

Route::post('/cart',[ProductController::class,'addtocart']);


Route::post('/autocart',[OrderController::class,'autocart']);
 
