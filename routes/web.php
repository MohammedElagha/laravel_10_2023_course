<?php

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

Route::get('settings/profile', function () {
//    \Illuminate\Support\Facades\DB::select("select * from students");
    $pageName = "profile";
    return "this is settings - $pageName page";
});

Route::get('users/all', function () {
    return view('users');
});

Route::get('products', function () {
    return view('products.all');
});
