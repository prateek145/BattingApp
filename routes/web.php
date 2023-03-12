<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\HomeController;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [BackendController::class, 'dashboard'])->name('dashboard');
Route::get('/accounts', [BackendController::class, 'accounts'])->name('accounts');
Route::get('/mybets', [BackendController::class, 'mybets'])->name('mybets');
Route::get('/profitloss', [BackendController::class, 'profitloss'])->name('profitloss');
Route::get('/result', [BackendController::class, 'result'])->name('result');
Route::get('/accountstatement', [BackendController::class, 'accountstatement'])->name('accountstatement');
