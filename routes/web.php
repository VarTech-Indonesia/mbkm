<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// Admin
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\UserAdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index']);
Route::get('/page/{id}/{url}', [HomeController::class, 'show']);
Route::get('/berita', [HomeController::class, 'berita']);
Route::get('/info', [HomeController::class, 'info']);
Route::get('/video', [HomeController::class, 'video']);

// Login Admin
Route::get('/admin', [AuthController::class, 'index'])->name('admin');
Route::get('/admin/login', [AuthController::class, 'login'])->name('admin-login');
Route::post('/admin/login-proses', [AuthController::class, 'proses'])->name('admin-login-proses');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'admin'], function () {

        // Login and Logout Admin
        Route::get('/home', [AdminHomeController::class, 'index'])->name('admin-home');
        Route::get('/logout', [AuthController::class, 'logout'])->name('admin-logout');


        // User
        Route::get('/user', [UserAdminController::class, 'index'])->name('admin-user');
        Route::get('/register-create', [AuthController::class, 'create'])->name('admin-register-create');
        Route::get('/user-edit/{id}', [UserAdminController::class, 'edit']);
        Route::post('/user-update', [UserAdminController::class, 'update'])->name('admin-user-update');
        Route::post('/register-store', [AuthController::class, 'store'])->name('admin-register-store');


        // Menu Parent
        Route::resource('menu-parent', MenuParentAdminController::class);
        // Menu One Child
        Route::resource('menu-one-child', MenuOneChildAdminController::class);
        // Menu Two Child
        Route::resource('menu-two-child', MenuTwoChildAdminController::class);
        // Post Categories
        Route::resource('post-categories', PostCategoriesAdminController::class);
        // Page
        Route::resource('page', PageAdminController::class);
        // Post
        Route::resource('post', PostAdminController::class);
        // Slider
        Route::resource('slider', SliderController::class);
        // Video
        Route::resource('video', VideoController::class);
    });
});
