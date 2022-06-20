<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\DashboardController;
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

Route::middleware(['auth:sanctum', 'verified'])
    ->name('dashboard.')
    ->prefix('dashboard')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');

        Route::middleware(['admin'])->group(function () {
            // classroom
            Route::resource('classroom', ClassroomController::class);
            // // product gallery
            // Route::resource('product.gallery', ProductGalleryController::class)->shallow()->only([
            //     'index', 'create', 'store', 'destroy'
            // ]);
            // // transaction
            // Route::resource('transaction', TransactionController::class)->only([
            //     'index', 'show', 'edit', 'update'
            // ]);
            // // user
            // Route::resource('user', UserController::class)->only([
            //     'index', 'edit', 'update', 'destroy'
            // ]);
        });
    });
