<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\VerifyCsrfToken;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\JobsiteController;
use App\Http\Controllers\MedicalController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PrincipalController;

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

Auth::routes();

Route::get('/', [LoginController::class, 'index']);

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

// JobSite
Route::get('/jobsite', [JobsiteController::class, 'index'])->name('jobsite')->middleware('auth');
Route::post('/jobsite/table', [JobsiteController::class, 'getTable'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/jobsite/getModal', [JobsiteController::class, 'getModal'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/jobsite/add', [JobsiteController::class, 'store']);
Route::post('/jobsite/delete', [JobsiteController::class, 'delete']);

// Location
Route::get('/location', [LocationController::class, 'index'])->name('location')->middleware('auth');
Route::post('/location/table', [LocationController::class, 'getTable'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/location/getModal', [LocationController::class, 'getModal'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/location/add', [LocationController::class, 'store']);
Route::post('/location/delete', [LocationController::class, 'delete']);

// Principal
Route::get('/principal', [PrincipalController::class, 'index'])->name('principal')->middleware('auth');
Route::post('/principal/table', [PrincipalController::class, 'getTable'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/principal/getModal', [PrincipalController::class, 'getModal'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/principal/add', [PrincipalController::class, 'store']);
Route::post('/principal/delete', [PrincipalController::class, 'delete']);

// Medical
Route::get('/medical', [MedicalController::class, 'index'])->name('medical')->middleware('auth');
Route::post('/medical/table', [MedicalController::class, 'getTable'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/medical/getModal', [MedicalController::class, 'getModal'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/medical/add', [MedicalController::class, 'store']);
Route::post('/medical/delete', [MedicalController::class, 'delete']);

// Branch
Route::get('/branch', [BranchController::class, 'index'])->name('branch')->middleware('auth');
Route::post('/branch/table', [BranchController::class, 'getTable'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/branch/getModal', [BranchController::class, 'getModal'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/branch/add', [BranchController::class, 'store']);
Route::post('/branch/delete', [BranchController::class, 'delete']);


// USER
Route::get('/user', [UserController::class, 'index'])->name('user')->middleware('auth');
Route::post('/user/table', [UserController::class, 'getTable'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/user/getModal', [UserController::class, 'getModal'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/user/add', [UserController::class, 'store']);
Route::post('/user/delete', [UserController::class, 'delete']);
// Logout User
Route::post('/logout', [UserController::class, 'logout']);

// Loging user
Route::post('/login/validate', [UserController::class, 'validateLogin']);
Route::post('/login/register', [UserController::class, 'register']);


