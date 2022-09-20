<?php

use App\Http\Controllers\ApplicantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
use App\Http\Controllers\UsertypeController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\TablecolumnController;

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

Route::get('/home', function(){

    $menus = DB::table('menus')->where('root', '=', '0')->get();
    foreach ($menus as $key => $value) {
        $data['menus'][$value->title] = json_decode(DB::table('menus')->where("root", "=", $value->menu_id)->orderBy("order", "asc")->get());
    }

    $data['navSelected'] = 1;
    $data['menuSelected'] = 5;
    return view('home', $data);

})->name('home')->middleware('auth');

Route::post('/home', function (Request $request) {
    $menus = DB::table('menus')->where('root', '=', '0')->get();
    foreach ($menus as $key => $value) {
        $data['menus'][$value->title] = json_decode(DB::table('menus')->where("root", "=", $value->menu_id)->orderBy("order", "asc")->get());
    }

    $data['navSelected'] = $request->nav;
    $data['menuSelected'] = $request->menu_id;
    // dd($nav);
    return view($request->route, $data);
    
})->middleware('auth');

// JobSite
Route::post('/jobsite/table', [JobsiteController::class, 'getTable'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/jobsite/getModal', [JobsiteController::class, 'getModal'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/jobsite/add', [JobsiteController::class, 'store']);
Route::post('/jobsite/delete', [JobsiteController::class, 'delete']);

// Location
Route::post('/location/table', [LocationController::class, 'getTable'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/location/getModal', [LocationController::class, 'getModal'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/location/add', [LocationController::class, 'store']);
Route::post('/location/delete', [LocationController::class, 'delete']);

// Principal
Route::post('/principal/table', [PrincipalController::class, 'getTable'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/principal/getModal', [PrincipalController::class, 'getModal'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/principal/add', [PrincipalController::class, 'store']);
Route::post('/principal/delete', [PrincipalController::class, 'delete']);

// Medical
Route::post('/medical/table', [MedicalController::class, 'getTable'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/medical/getModal', [MedicalController::class, 'getModal'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/medical/add', [MedicalController::class, 'store']);
Route::post('/medical/delete', [MedicalController::class, 'delete']);

// Branch
Route::post('/branch/table', [BranchController::class, 'getTable'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/branch/getModal', [BranchController::class, 'getModal'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/branch/add', [BranchController::class, 'store']);
Route::post('/branch/delete', [BranchController::class, 'delete']);


// USER
Route::post('/user/table', [UserController::class, 'getTable'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/user/getModal', [UserController::class, 'getModal'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/user/add', [UserController::class, 'store']);
Route::post('/user/delete', [UserController::class, 'delete']);

// USER TYPE
Route::post('/usertype/table', [UsertypeController::class, 'getTable'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/usertype/getModal', [UsertypeController::class, 'getModal'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/usertype/add', [UsertypeController::class, 'store']);
Route::post('/usertype/delete', [UsertypeController::class, 'delete']);

// table column
Route::post('/tablecolumn/table', [TablecolumnController::class, 'getTable'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/tablecolumn/getModal', [TablecolumnController::class, 'getModal'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/tablecolumn/add', [TablecolumnController::class, 'store']);


// Logout User
Route::post('/logout', [UserController::class, 'logout']);

// Loging user
Route::post('/login/validate', [UserController::class, 'validateLogin']);
Route::post('/login/register', [UserController::class, 'register']);

// DASHBAORD
Route::get('/dashboard', [HomeController::class, 'index'])->middleware('auth');


// APPLICANT
Route::post('/applicant/list', [ApplicantController::class, 'getTable'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/applicant/getModal', [ApplicantController::class, 'getModal'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/applicant/getApplicantProfileTab', [ApplicantController::class, 'profileTab'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/applicant/add', [ApplicantController::class, 'store']);
Route::post('/applicant/store', [ApplicantController::class, 'updateApplicantData']);
Route::post('/applicant/profile', [ApplicantController::class, 'profile'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/applicant/record', [ApplicantController::class, 'record'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/applicant/document', [ApplicantController::class, 'document'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/applicant/oec', [ApplicantController::class, 'oec'])->withoutMiddleware([VerifyCsrfToken::class]);

Route::get('/credits', function(){
    echo "Created by kennedy hipolito<br>";
    echo "Email: whoamikenken@gmail.com<br>";
    echo "Contact: 09226361316<br>";
});


