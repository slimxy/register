<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\StudentController;
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
Route::get('/',[App\Http\Controllers\StudentController::class ,'index'])->name('home');    
Route::post('/',[StudentController::class ,'register'])->name('register');    
Route::get('edit/{id}',[App\Http\Controllers\StudentController::class ,'edit'])->name('edit');    
Route::post('update/{id}',[App\Http\Controllers\StudentController::class ,'update'])->name('update');    
Route::get('delete/{id}',[App\Http\Controllers\StudentController::class ,'delete'])->name('delete');    
Route::get('view/{id}',[App\Http\Controllers\StudentController::class ,'view'])->name('view');


