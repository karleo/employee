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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware('auth')->get('/', function () {
    return view('dash');
});

// Route::get('/dash', function () {
//     return view('dash');
// });

// Auth::routes();
Auth::routes([
    'register' => true,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::name('employee.')->middleware(['auth'])->prefix('employee')->group(function() {
    
    Route::get('/',[App\Http\Controllers\EmployeesController::class, 'index'])->name('index');
    Route::get('/create',[App\Http\Controllers\EmployeesController::class, 'create'])->name('create');
    Route::post('/create',[App\Http\Controllers\EmployeesController::class, 'store'])->name('store');
    Route::get('/{employees}',[App\Http\Controllers\EmployeesController::class, 'show'])->name('show');
    Route::get('/edit/{employees}',[App\Http\Controllers\EmployeesController::class, 'edit'])->name('edit');   
    Route::put('/update/{employees}',[App\Http\Controllers\EmployeesController::class, 'update'])->name('update');   
    Route::get('/qr/{employees}',[App\Http\Controllers\EmployeesController::class, 'generateQR'])->name('gQR');
    Route::get('/detail/{employees}',[App\Http\Controllers\EmployeesController::class, 'details'])->name('detail');   

});



Route::get('/card', function () {
    return view('card.index');
});

Route::get('/employee/{employees}',[App\Http\Controllers\EmployeesController::class, 'show'])->name('employee.show');   
Route::get('/vcard/{employees}',[App\Http\Controllers\EmployeesController::class, 'downloadvcard'])->name('dvcard');
