<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProjectController;
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

//Route::view('employee', 'intranet.employee.index');

Route::view('intranet', 'intranet.index')->name('intranet.index');

Route::get('intranet/employee', [EmployeeController::class, 'index'])->name('employee.index');

Route::get('intranet/project', [ProjectController::class, 'index'])->name('project.index');
Route::get('intranet/project/create', [ProjectController::class, 'create'])->name('project.create');

//Route::get('employees', EmployeeController::class)->name('employee');
