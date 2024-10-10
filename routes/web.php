<?php

use App\Http\Controllers\admincontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/view' ,[admincontroller::class ,'view'])->name('view');
Route::post('/register' ,[admincontroller::class ,'register'])->name('register');
Route::get('/login' ,[admincontroller::class ,'login'])->name('login');

Route::post('/logindata' ,[admincontroller::class ,'logindata'])->name('logindata');
