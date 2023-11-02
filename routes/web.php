<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;

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


Route::get('/',[testController::class,'get_data'])->name('home');
Route::post('/add_category',[testController::class,'add_category']);
Route::post('/add_product',[testController::class,'add_product']);
Route::delete('/delete_product/{id}',[testController::class,'delete_product']);
Route::get('/edit_product/{id}',[testController::class,'edit_product']);
Route::put('/update_product/{id}',[testController::class,'update_product']);
