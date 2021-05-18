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

Route::get('/welcome', function () {
    return view('welcome');
});

//route using route::get for '/'
use App\Http\Controllers\StudentsController;
Route::get('/', [StudentsController::class, 'index']);


// Route::resource('/', 'App\Http\Controllers\StudentsController');
Route::resource('students', 'App\Http\Controllers\StudentsController');
