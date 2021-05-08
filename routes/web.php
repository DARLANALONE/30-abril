<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompaniesController;

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

Route::redirect('/','users');

Route::get('users',[\App\Http\Controllers\UserController::class,'index']);
Route::get('users/create',[\App\Http\Controllers\UserController::class,'create']);
Route::post('users',[\App\Http\Controllers\UserController::class,'store']);
Route::get('users/{id}',[\App\Http\Controllers\UserController::class,'show']);
Route::get('users/edit/{id}',[\App\Http\Controllers\UserController::class,'edit']);
Route::delete('users/{id}',[\App\Http\Controllers\UserController::class,'destroy']);
Route::put('users/{id}',[\App\Http\Controllers\UserController::class,'update']);

Route::get('companies',[CompaniesController::class,'index']);
Route::get('companies/create',[CompaniesController::class,'create']);
Route::post('companies',[\App\Http\Controllers\CompaniesController::class,'store']);

