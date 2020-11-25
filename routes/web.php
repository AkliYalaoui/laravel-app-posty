<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\post\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;
use Illuminate\Support\Facades\Route;

##home page
Route::get('/',function (){return view('home');})->name('home');

##dashboard page
Route::get("/dashboard",[DashboardController::class,'index'])->name('dashboard');

##registration page
Route::get("/register",[RegisterController::class,'index'])->name('register');
Route::post("/register",[RegisterController::class,'store']);

##login page
Route::get("/login",[LoginController::class,'index'])->name('login');
Route::post("/login",[LoginController::class,'login']);

##logout page
Route::post('/logout',[LogoutController::class,'index'])->name('logout');

##post page
Route::get('/post', [PostController::class,'index'])->name('post');
Route::get('/post/{post}', [PostController::class,'show'])->name('post.single');
Route::post('/post', [PostController::class,'post']);
Route::delete('/post/{post}', [PostController::class,'destroy'])->name('post.destroy');
Route::post('/post/{post}/like',[PostLikeController::class,'store'])->name('post.like');
Route::delete('/post/{post}/like',[PostLikeController::class,'destroy']);

##users
Route::get('/user/{user:username}', [UserPostController::class,'index'])->name('user');
