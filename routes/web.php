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

Route::get('/dash', function () {
    return view('dash');
});

Auth::routes();


Route::get('/employee',[App\Http\Controllers\EmployeesController::class, 'index'])->name('employee.index');
Route::get('/create',[App\Http\Controllers\EmployeesController::class, 'create'])->name('employee.create');
Route::post('/create',[App\Http\Controllers\EmployeesController::class, 'store'])->name('employee.store');
Route::get('/employee/{employees}',[App\Http\Controllers\EmployeesController::class, 'show'])->name('profile');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



