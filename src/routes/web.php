<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/show_tours', [TourController::class, 'show_tours'])->name('show_tours')->middleware('auth');
Route::get('/show_tour/{tour_id}', [TourController::class, 'show_tour'])->name('show_tour')->middleware('auth');
Route::post('/store_booking/{tour_id}', [TourController::class, 'store_booking'])->name('store_booking')->middleware('auth');
Route::get('/result_booking/{tour_id}', [TourController::class, 'result_booking'])->name('result_booking')->middleware('auth');
Route::delete('/delete_booking/{book_id}', [TourController::class, 'delete_booking'])->name('delete_booking')->middleware('auth');
Route::get('/result_delete/{tour_id}', [TourController::class, 'result_delete'])->name('result_delete')->middleware('auth');
Route::get('/history', [HomeController::class, 'history'])->name('history');
Route::get('/appeal', [HomeController::class, 'appeal'])->name('appeal');

Route::get('/admin/login', [LoginController::class, 'adminLoginForm']);
Route::post('/kbc_administrator/authenticate', [LoginController::class, 'adminAuthentication'])->name('admin.authenticate');
Route::get('/admin/show', [AdministratorController::class, 'show'])->name('admin.show')->middleware('auth:admin');