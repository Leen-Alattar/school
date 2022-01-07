<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;

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
    return view('interface.index');
});
Route::get('/single', function () {
    return view('interface.grid');
});
Route::get('/exam', function () {
    return view('interface.exam');
});
Route::get('/admin', function () {
    return view('admin.index');
});
Route::resource('/admin',ExamController::class);