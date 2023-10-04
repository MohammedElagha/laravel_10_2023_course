<?php

//use App\Http\Controllers\Car\CarController;
use App\Http\Controllers\Car\CarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\Student\StudentController;
//use App\Http\Controllers\Car\CarController;
//use App\Http\Controllers\Car\CarController;

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

Route::get('std/profile', function () {
    return view('students.info.profile', ['name' => 'Ahmed', 'gpa' => 88.4]);
});

Route::get('students/details', function() {
    $name = "Ahmed";
    $id = "120145454";
    $address = "Gaza";
    $gpa = 87.14;

//    $courses = ["Web 1", "Web 2", "Laravel"];
    $courses = [];


    $person = ["name" => "Ahmed",
                "address" => "Gaza",
                "salary" => 70,
                "courses" => $courses];

    return view('students.getOne')
        ->with('person', $person)
        ->with('courses', $courses)
        ->with('user_name', "Ali")
        ->with('studentId', $id)
        ->with('address', $address)
        ->with('gpa', $gpa)
        ->with('code', "<script></script>");
});


Route::get('books/all', [BookController::class, 'index']);

Route::get('students/one', [StudentController::class, 'getOne']);
Route::get('students/all', [StudentController::class, 'getAll']);

Route::get('cars/create', [CarController::class, 'create']);
Route::get('cars/store', [CarController::class, 'store']);
