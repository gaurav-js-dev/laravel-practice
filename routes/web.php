<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\SmartPunct\DashParser;

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

// Group function middleware
Route::middleware(['auth'])->group(function () {
    Route::get('/post', [PostController::class, 'index'])->name('post_index');
    Route::post('/post', [PostController::class, 'create'])->name('post_create');
});

// Applying middleware normally
// Route::get('/post', [PostController::class, 'index'])->middleware(['auth'])->name('post_index');
// Route::post('/post', [PostController::class, 'create'])->middleware(['auth'])->name('post_create');
Route::get('/dashboard', [DashboardController::class, 'show_post'])->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
