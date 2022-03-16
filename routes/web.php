<?php

use App\Http\Controllers\Roles\PermissionController;
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

// Route::get('/dashboard', function () {
//     // return view('dashboard');
//     return view('backend.index');
// })->middleware(['auth'])->name('dashboard');
    
Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', function () {
        return view('backend.index');
    })->name('dashboard');

    Route::resource('permission', PermissionController::class)->except('show');
});

require __DIR__.'/auth.php';
