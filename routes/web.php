<?php

use App\Models\User;
use App\Models\Classes;
use App\Models\Student;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MutasiController;
use App\Http\Controllers\PeriodController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Controllers\MutationController;
use App\Http\Controllers\TransactionController;

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


Route::middleware([EnsureTokenIsValid::class, 'auth'])->group(function () {
    Route::get('/dashboard', function () {
        $student = Student::count();
        $jurusan = Student::select('major', DB::raw('count(*) as total'))
        ->groupBy('major')
        ->pluck('total','major')->count();

        $class = Classes::count();
        $transaction = Transaction::sum('jumlah');
        return view('dashboard', compact('student', 'class','transaction','jurusan'));
    })->name('dashboard');

    Route::prefix('student')->group(function () {
        Route::get('/', [StudentController::class, 'index'])->name('student');
        Route::get('/classes/{classesId}', [StudentController::class, 'classes'])->name('classes.student');
        Route::post('/post', [StudentController::class, 'store'])->name('post.student');
        Route::post('/import', [StudentController::class, 'import'])->name('import.student');
        Route::get('/delete/{student}', [StudentController::class, 'destroy'])->name('destroy.student');
        Route::get('/{student}', [StudentController::class, 'show'])->name('show.student');
        Route::post('/update', [StudentController::class, 'update'])->name('update.student');
    });

    Route::prefix('setting')->group(function () {
        Route::get('/', [SettingController::class, 'index'])->name('setting');
    });

    Route::prefix('period')->group(function () {
        Route::get('/', [PeriodController::class, 'index'])->name('period');
        Route::get('/{period}', [PeriodController::class, 'show'])->name('show.period');
        Route::post('/', [PeriodController::class, 'store'])->name('post.period');
        Route::get('/delete/{period}', [PeriodController::class, 'destroy'])->name('destroy.period');
        Route::post('/update', [PeriodController::class, 'update'])->name('update.period');
    });

    Route::prefix('classes')->group(function () {
        Route::get('/', [ClassesController::class, 'index'])->name('classes');
        Route::get('/{classes}', [ClassesController::class, 'show'])->name('show.classes');
        Route::post('/', [ClassesController::class, 'store'])->name('post.classes');
        Route::get('/delete/{classes}', [ClassesController::class, 'destroy'])->name('destroy.classes');
        Route::post('/update', [ClassesController::class, 'update'])->name('update.classes');
    });

    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user');
        Route::get('/{user}', [UserController::class, 'show'])->name('show.user');
        Route::post('/', [UserController::class, 'store'])->name('post.user');
        Route::get('/delete/{user}', [UserController::class, 'destroy'])->name('destroy.user');
        Route::post('/update', [UserController::class, 'update'])->name('update.user');
    });

    Route::prefix('transaction')->group(function () {
        Route::get('/',[TransactionController::class, 'classes'])->name('transaction');

        Route::get('/delete/{tahun}/{bulan}/{idStudent}',[TransactionController::class, 'destroy'])->name('transaction.destroy');

        Route::get('/detail',[TransactionController::class, 'index'])->name('transaction-detail');
        Route::post('/payment/{idStudent}',[TransactionController::class, 'store'])->name('transaction.payment');
        Route::get('/classes/{id_classes}',[TransactionController::class, 'student'])->name('transaction.student');
        Route::get('/recap/{year}/student/{student}',[TransactionController::class, 'recap'])->name('transaction-recap');
    });

    Route::prefix('mutation')->group(function () {
        Route::get('/',[MutationController::class, 'index'])->name('mutation');
        Route::get('/student/{id}',[MutationController::class, 'detail'])->name('mutation');
        Route::post('/cetak/{idStudent}',[MutationController::class, 'cetak'])->name('mutation');
    });

    // Route::prefix('transaction')->group(function () {
    //     Route::get('/', [TransactionController::class, 'index'])->name('transaction');
    // });
    Route::prefix('report')->group(function () {
        Route::get('/', [ReportController::class, 'index'])->name('report');
        Route::post('/report', [ReportController::class, 'post'])->name('report.post');
    });



    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

    // Route::get('/mutation', function () {
    //     return view('mutation');
    // })->name('mutation');
});

require __DIR__ . '/auth.php';
