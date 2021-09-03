<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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
Route::get('/',[StudentController::class,'view']);
Route::get('/view',[StudentController::class,'view'])->name('Read');
Route::get('/add',[StudentController::class,'create'])->name('Create');
Route::post('/add',[StudentController::class,'store']);
Route::get('/change/{id}',[StudentController::class,'update'])->name('Update');
Route::post('/change/{id}',[StudentController::class,'updateStore']);
Route::get('/delete/{id}',[StudentController::class,'destroy'])->name('Delete'); 