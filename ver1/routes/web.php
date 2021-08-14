<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class, 'index']);
Route::get('pkkm', [HomeController::class, 'pkkm']);
Route::get('pkkmsbmitb', [HomeController::class, 'pkkmsbmitb']);
Route::get('pkkmsapkkitb', [HomeController::class, 'pkkmsapkkitb']);
Route::get('pkkmstieitb', [HomeController::class, 'pkkmstieitb']);
Route::get('pkkmgeofisikaitb', [HomeController::class, 'pkkmgeofisikaitb']);


Route::get('permatasakti', [HomeController::class, 'permatasakti']);
Route::get('bangkit', [HomeController::class, 'bangkit']);
Route::get('matchingfund', [HomeController::class, 'matchingfund']);
Route::get('iisma', [HomeController::class, 'iisma']);
Route::get('kkntematik', [HomeController::class, 'kkntematik']);
Route::get('summerschool', [HomeController::class, 'summerschool']);
Route::get('pnpm', [HomeController::class, 'pnpm']);
Route::get('desabinaan', [HomeController::class, 'desabinaan']);
Route::get('insentif', [HomeController::class, 'insentif']);
Route::get('mitigasibencana', [HomeController::class, 'mitigasibencana']);
Route::get('citarumharum', [HomeController::class, 'citarumharum']);
Route::get('programkerjasama', [HomeController::class, 'programkerjasama']);
