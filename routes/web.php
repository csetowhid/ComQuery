<?php

use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Roles\PermissionController;
use App\Http\Controllers\Roles\RoleController;
use App\Http\Controllers\Roles\UserController;
use App\Http\Controllers\QuizController;
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

Route::group(['middleware' => 'auth'], function(){

    Route::get('/dashboard',HomeController::class)->name('dashboard');

    /*----- Role -----*/
    Route::resource('permission', PermissionController::class)->except(['create','show']);
    Route::resource('roles', RoleController::class)->except('show');
    Route::resource('users', UserController::class)->except('show');

    /*----- Quiz -----*/
    Route::resource('quiz', QuizController::class)->except('show');
});

require __DIR__.'/auth.php';
