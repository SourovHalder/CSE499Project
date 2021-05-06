<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Front\UsersController;
use App\Http\Controllers\Admin\ManufacturerController;
use App\Http\Controllers\Admin\MedicinesController;


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
Route::match(['get','post'],'admin/add-edit-medicine/{id?}',[MedicinesController::class,'addEditMedicine']);

//UserCOntrollers routes
Route::get('/autoorder',[UsersController::class,'autoorder']);
Route::get('/addedit',[AdminController::class,'addedit']);

   

   
 
