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
    return view('auth.login');
});

Route::get('/admin/table', function () {
    return view('admin.table');
})->name('admin.table');

Route::get('/admin/main', function () {
    return view('admin.main');
})->name('admin.main');


Route::get('/admin/manage', function () {
    return view('admin.manage');
})->name('admin.manage');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/app', [App\Http\Controllers\HomeController::class, 'index'])->name('app');