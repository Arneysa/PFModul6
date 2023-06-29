<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*
|
--------------------------------------------------------------------------
-----------------------
| Web Routes
|
--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', '/login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/profile', ProfileController::class)->name('profile')->middleware('auth');
Route::resource('employees', EmployeeController::class)->middleware('auth');

Route::put('/employee/{id}', 'EmployeeController@update')->name('employee.update');


Auth::routes();
