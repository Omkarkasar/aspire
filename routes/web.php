<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'userform'])->name('userform');
Route::get('userlist',[HomeController::class,'userlist'])->name('userlist');
Route::get('useredit/{id}',[HomeController::class,'useredit'])->name('useredit');
Route::post('userstore',[UserController::class,'userstore'])->name('userstore');
Route::post('userupdate/{id}',[UserController::class,'userupdate'])->name('userupdate');
Route::post('userdelete/{id}',[UserController::class,'userdelete'])->name('userdelete');

