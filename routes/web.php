<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// Admin
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminHomeController;

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
Route::group(['prefix' => 'admin','middleware' => ['auth','CekLevelAdmin:1']], function() 
{
        // Login and Logout Admin
        Route::get('/home', [AdminHomeController::class, 'index'])->name('admin-home');
        Route::get('/logout', [AuthController::class, 'logout'])->name('admin-logout');
        // User Admin
        Route::resource('user-admin', UserAdminController::class);
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
Route::group(['prefix' => 'admin','middleware' => ['auth','CekLevelAdmin:1,3']], function() 
{
    // Login and Logout Admin
    Route::get('/home', [AdminHomeController::class, 'index'])->name('admin-home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('admin-logout');
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
