<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

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



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function(){
//all the admin routes will be here
Route::match(['get','post'],'/login',[AdminController::class,'adminLogin'])
              ->name('admin_login');
Route::match(['get','post'],'/',[AdminController::class,'adminlogin']);
Route::group(['middleware'=>['admin']],function(){
Route::get('/dashboard',[AdminController::class,'dashboard']);
});
});