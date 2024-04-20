<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ParentController;
use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\SubjectController;


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

Auth::routes();

// route for users
Route::resource('users', UserController::class);

// route for home
Route::resource('home', DashboardController::class);

//route for parent
Route::resource('/parent', ParentController::class);

//route for class
Route::resource('/class', ClassController::class);

//route for students
Route::resource('/student', StudentController::class);

//route for teacher
Route::resource('/teacher', TeacherController::class);


//route for subject
Route::resource('/subject', SubjectController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
