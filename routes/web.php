<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
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

Route::get('/home/{a}/{b}', [HomeController::class, 'Home']);
Route::resource('users', UserController::class);
Route::prefix('/task')->group(function(){
    Route::get('/show', [TaskController::class, 'show']);
    Route::get('/register', [TaskController::class, 'register']);
    Route::get('/auth', [TaskController::class, 'auth']);
});
