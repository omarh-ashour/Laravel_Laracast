<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\SessionController;
//Home Route
Route::view('/', 'home');
//Contact Route
Route::view('/contact', 'contact');
//Job Routes
Route::resource('jobs', JobController::class);
//Auth
Route::get('/register',[RegisteredUserController::class,'create']);
Route::post('/register',[RegisteredUserController::class,'store']);
Route::get('/login',[SessionController::class,'create']);
Route::post('/login',[SessionController::class,'store']);
Route::post('/logout',[SessionController::class,'destroy']);


/*
// Route::controller(JobController::class)->group(function () {
//     Route::get('jobs', ['index']);
//     Route::get('jobs/create', ['create']);
//     Route::get('/jobs/{job}', ['show']);
//     Route::post('/jobs', ['store']);
//     Route::get('/jobs/{job}/edit', ['edit']);
//     Route::patch('/jobs/{job}', ['update']);
//     Route::delete('jobs/{job}', ['destroy']);
// });
*/
