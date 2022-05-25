<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Frontend\IndexController;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix'=> 'admin', 'middleware'=> ['admin:admin']], function() {
    Route::get('/login', [AdminController::class, 'loginForm'])->name('admin.login.form');
    Route::post('login', [AdminController::class, 'store'])->name('admin.login');
});



Route::middleware(['auth:admin'])->group(function () {

    // Admin middleware
    Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
        return view('admin.index');
    })->name('dashboard')->middleware('auth:admin');
});


// Admin All Routes
Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');




Route::prefix('profile')->group(function() {
    Route::get('/view', [ProfileController::class, 'ProfileView'])->name('profile.view');
    Route::get('/add', [ProfileController::class, 'ProfileViewAdd'])->name('profile.view.add');
    Route::post('/store', [ProfileController::class, 'ProfileStore'])->name('profile.store');
});

Route::prefix('project')->group(function() {
    Route::get('/view', [ProjectController::class, 'ProjectView'])->name('project.view');
    Route::get('/add', [ProjectController::class, 'ProjectViewAdd'])->name('project.view.add');
    Route::post('/store', [ProjectController::class, 'ProjectStore'])->name('project.store');
});

// User All Routes
Route::get('/', [IndexController::class, 'index']);







