<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;


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

Route::get('/post',[PostController::class,'index'])->name('post.index');
Route::get('/post/create',[PostController::class,'create'])->name('post.create');
Route::post('/post',[PostController::class,'store'])->name('post.store');
Route::get('/post/edit/{id}',[PostController::class,'edit'])->name('post.edit');
Route::post('/post/update/{id}',[PostController::class,'update'])->name('post.update');
Route::get('/post/delete/{id}',[PostController::class,'destroy'])->name('post.delete');

Route::get('/comment',[CommentController::class,'index'])->name('comment.index');
Route::get('/comment/create',[CommentController::class,'create'])->name('comment.create');
Route::post('/comment',[CommentController::class,'store'])->name('comment.store');
Route::get('/comment/edit/{id}',[CommentController::class,'edit'])->name('comment.edit');
Route::post('/comment/update/{id}',[CommentController::class,'update'])->name('comment.update');
Route::get('/comment/delete/{id}',[CommentController::class,'delete'])->name('comment.delete');

Route::get('/tag',[TagController::class,'index'])->name('tag.index');
Route::get('/tag/create',[TagController::class,'create'])->name('tag.create');
Route::post('/tag/store',[TagController::class,'store'])->name('tag.store');
Route::get('/tag/delete/{id}',[TagController::class,'destroy'])->name('tag.delete');
