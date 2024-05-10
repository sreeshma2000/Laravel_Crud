<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudscontroller;

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

Route::resource('/student',crudscontroller::class);

// Route::get('/student',[crudscontroller::class,'create']);
Route::get('/students', [crudscontroller::class, 'index'])->name('student.index');

Route::get('/', function () {
    return view('student.login');
    
});





