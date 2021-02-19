<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'principal')->name('principal');

Route::view('acerca-de', 'acerca-de')->name('acerca-de');

Route::view('contactanos', 'contactanos')->name('contactanos');

//Route::get('employees', EmployeeController::class)->name('employee');
