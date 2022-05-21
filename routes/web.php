<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Controllers\StudentController;
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
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


Route::middleware([EnsureTokenIsValid::class])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/student', [StudentController::class,'index'])->name('student');
    // Route::get('/student', function () {
    //     return view('student');
    // })->name('student');
    Route::get('/transaction', function () {
        return view('transaction');
    })->name('transaction');
    Route::get('/report', function () {
        return view('report');
    })->name('report');
    Route::get('/report', function () {
        return view('report');
    })->name('report');
    Route::get('/setting', function () {
        return view('setting');
    })->name('setting');



});
require __DIR__.'/auth.php';
