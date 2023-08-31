<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

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
Route::controller(EmployeeController::class)->group(function(){
    Route::get('/','index')->name('/');
    Route::get('/create','create')->name('create');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::get('/delete/{id}','destroy')->name('delete');
    Route::post('/update/{id}','update')->name('update');
    Route::post('/store', 'store')->name('store');
});