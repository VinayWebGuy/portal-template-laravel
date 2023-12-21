<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

// Dashboard
Route::get('/', [HomeController::class, 'index']);

// Team
Route::get('team/add', [HomeController::class, 'addTeam']);
Route::get('team/all', [HomeController::class, 'allTeam']);

// Student
Route::get('student/add', [HomeController::class, 'addStudent']);
Route::get('student/all', [HomeController::class, 'allStudent']);

// Quiz
Route::get('quiz/add', [HomeController::class, 'addQuiz']);
Route::get('quiz/all', [HomeController::class, 'allQuiz']);

// Question
Route::get('question/add', [HomeController::class, 'addQuestion']);
Route::get('question/all', [HomeController::class, 'allQuestion']);

// Pricing
Route::get('pricing', [HomeController::class, 'pricing']);

// Certificate
Route::get('certificate', [HomeController::class, 'certificate']);

// Profile
Route::get('profile', [HomeController::class, 'profile']);

// Account
Route::get('account', [HomeController::class, 'account']);

// Security
Route::get('security', [HomeController::class, 'security']);

// Login
Route::get('login', [HomeController::class, 'login']);

// Register
Route::get('register', [HomeController::class, 'register']);

// Forget
Route::get('forget', [HomeController::class, 'forget']);
