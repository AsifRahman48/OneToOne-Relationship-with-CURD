<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
//Route::controller(UserController::class)->group(function (){
//    Route::get('/user','index')->name(user.index);
//    Route::get('/user/create','index')->name(user.create);
//});
Route::get('user',[UserController::class,'index'])->name('user.index');
Route::get('user/create',[UserController::class,'create'])->name('user.create');
Route::post('user',[UserController::class,'store'])->name('user.store');
Route::get('/user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
Route::post('/user/update/{id}',[UserController::class,'update'])->name('user.update');
Route::get('/user/delete/{id}',[UserController::class,'destroy'])->name('user.delete');
