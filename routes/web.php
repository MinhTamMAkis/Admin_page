<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginAdminController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AdminController::class, 'index'])->name('login_index');
Route::post('/register',[AdminController::class,'register'])->name('register');
Route::post('/login',[AdminController::class,'login'])->name('login');



Route::middleware(['checkloginadmin'])->group(function () {
    
    Route::get('/admin', [AdminController::class,'welcome'])->name('admin');
    Route::get('/admin-dashboard', [AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/logout',[AdminController::class,'logout'])->name('logout');
});




// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
