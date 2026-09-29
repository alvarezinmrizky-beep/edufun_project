<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Guru\DashboardController as GuruDashboardController;
use App\Http\Controllers\Siswa\DashboardController as SiswaDashboardController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('public.home');
})->name('home');

Route::get('/tentang', function () {
    return view('public.tentang');
})->name('tentang');

Route::get('/fitur', function () {
    return view('public.fitur');
})->name('fitur');

/*
|--------------------------------------------------------------------------
| Guest Routes
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {

    Route::get('/login', [LoginController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [LoginController::class, 'login'])
        ->name('login.process');

});


/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Logout
    |--------------------------------------------------------------------------
    */

    Route::post('/logout', [LoginController::class, 'logout'])
        ->name('logout');


    /*
    |--------------------------------------------------------------------------
    | ADMIN
    |--------------------------------------------------------------------------
    */

    Route::middleware('role:admin')
        ->prefix('admin')
        ->name('admin.')
        ->group(function () {

            Route::get('/dashboard', [AdminDashboardController::class, 'index'])
                ->name('dashboard');

        });


    /*
    |--------------------------------------------------------------------------
    | GURU
    |--------------------------------------------------------------------------
    */

    Route::middleware('role:guru')
        ->prefix('guru')
        ->name('guru.')
        ->group(function () {

            Route::get('/dashboard', [GuruDashboardController::class, 'index'])
                ->name('dashboard');

        });


    /*
    |--------------------------------------------------------------------------
    | SISWA
    |--------------------------------------------------------------------------
    */

    Route::middleware('role:siswa')
        ->prefix('siswa')
        ->name('siswa.')
        ->group(function () {

            Route::get('/dashboard', [SiswaDashboardController::class, 'index'])
                ->name('dashboard');

        });

});