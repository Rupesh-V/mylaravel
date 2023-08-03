<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::POST('dataInsert',[CustomerController::class,'addDetails']);
Route::get('/enquiries',[CustomerController::class,'list']);
Route::POST('contactInsert',[CustomerController::class,'conDetails']);

Route::get('/',[CardController::class,'list']);

Route::any('/admin',[AdminController::class,'list']);
Route::get('/edit/{id}',[AdminController::class,'edit']);
Route::put('/updated/{id}',[AdminController::class,'updating']);
Route::delete('/delete/{id}',[AdminController::class,'destroy']);
Route::any('addNew',[AdminController::class,'addNew']);
Route::get('/add', function () {
    return view('addnew');
});
Route::any('/log', function () {
    return view('login');
});
Route::any('/logind',[LoginController::class,'login']);
// Route::get('/login', function () {
//     return view('auth/login');
// });
Route::any('/forgot',[LoginController::class,'getForgetPassword']);
Route::any('/reset',[LoginController::class,'postForgetPassword']);
Route::get('/reset/{token}',[LoginController::class,'showResetForm'])->name('reset.form');
Route::any('/password/reset',[LoginController::class,'resetPassword'])->name('reset.password');
// student registration form 
Route::any('/std', function () {
    return view('student.std');
});
Route::POST('dataIn',[StudentController::class,'addData']);

Route::any('/stdlist',[StudentController::class,'stdlist']);
Route::any('/stdadmin',[StudentController::class,'stddis']);
Route::get('/view/{id}',[StudentController::class,'edit']);

