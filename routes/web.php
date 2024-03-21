<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\CentreController;


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


Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::controller(QuestionPaperController::class)->prefix('questions')->group(function () {
    Route::get('/', 'index')->name('questions.index');
    Route::get('/create', 'create')->name('questions.create');
    Route::post('/store', 'store')->name('questions.store');

    
    // Route::get('/edit/{batch}', 'edit')->name('questions.edit');
    // Route::put('/update/{batch}', 'update')->name('questions.update');
    // Route::get('/delete/{batch}', 'destroy')->name('questions.delete');
    // Route::get('/show/{batch}', 'show')->name('questions.show');
});

Route::controller(CentreController::class)->prefix('centres')->group(function () {
    Route::get('/', 'index')->name('centres.index');
    Route::get('/create', 'create')->name('centres.create');
    Route::post('/store', 'store')->name('centres.store');
});
