<?php

use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\UserController;

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

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  

// Home page
Route::get('/', function () {
    return view('index');
});

// Employee routes

// Show all employees
Route::get('/employees', [EmployeeController::class, 'index']);

// Single employee

Route::get('/employees/{employee}', [EmployeeController::class, 'show']);

// Departments routes
Route::get('/departments', [DepartmentController::class, 'index']);

// Single department
Route::get('/departments/{department}', [DepartmentController::class, 'show']);

// Login routes
Route::get('/login', [UserController::class, 'login']);

// Register routes
Route::get('/register', [UserController::class, 'create']);