<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// Homepage
Route::get('/', [HomeController::class, 'index']);

Route::get('/redirects',[HomeController::class, 'redirects']);

// Dashboard User
Route::get('/user',[AdminController::class, 'users']);

Route::get('/deleteuser/{id}',[AdminController::class, 'deleteuser']);

// Dashboard Menus
Route::get('/menu',[AdminController::class ,'menus']);

Route::get('/tambahmenu',[AdminController::class, 'tambahmenu']);

Route::post('/uploadmenu',[AdminController::class, 'uploadmenu']);

Route::get('/deletemenu/{id}',[AdminController::class, 'deletemenu']);

Route::get('/menuedit/{id}',[AdminController::class, 'menuedit']);

Route::post('/editmenu/{id}',[AdminController::class, 'editmenu']);

// Dashboard Team
Route::get('/team',[AdminController::class ,'teams']);

Route::get('/tambahteam',[AdminController::class, 'tambahteam']);

Route::post('/uploadteam',[AdminController::class, 'uploadteam']);

Route::get('/deleteteam/{id}',[AdminController::class, 'deleteteam']);

Route::get('/teamedit/{id}',[AdminController::class, 'teamedit']);

Route::post('/editteam/{id}',[AdminController::class, 'editteam']);

// RESERVASI
Route::get('/booking',[AdminController::class, 'booking']);

Route::post('/reservasi',[AdminController::class, 'reservasi']);

Route::get('/deletebook/{id}',[AdminController::class, 'deletebook']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});
