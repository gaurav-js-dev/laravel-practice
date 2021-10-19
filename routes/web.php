<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'show_post'])->name('home');
Route::get('/post/{id}', [PostController::class, 'show'])->name('post_show');


require __DIR__ . '/auth.php';



// Group function middleware
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'show_post'])->name('dashboard');
    Route::get('/post', [PostController::class, 'index'])->name('post_index');
    Route::post('/post', [PostController::class, 'create'])->name('post_create');
    Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post_edit');
    Route::post('/post/edit/{id}', [PostController::class, 'update'])->name('post_update');
    Route::get('/post/delete/{id}', [PostController::class, 'destroy'])->name('destroy');
});

// Applying middleware normally
// Route::get('/post', [PostController::class, 'index'])->middleware(['auth'])->name('post_index');
// Route::post('/post', [PostController::class, 'create'])->middleware(['auth'])->name('post_create');
