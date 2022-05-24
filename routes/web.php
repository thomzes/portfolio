<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=> 'admin', 'middleware'=> ['admin:admin']], function() {
    Route::get('/login', [AdminController::class, 'loginForm']);
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
    Route::get('/view/add', [ProfileController::class, 'ProfileViewAdd'])->name('profile.view.add');
    Route::post('/store', [ProfileController::class, 'ProfileStore'])->name('profile.store');
});


// User All Routes
Route::get('/', [IndexController::class, 'index']);







