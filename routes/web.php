<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Guest
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\MainController as AdminMainController;
use App\Http\Controllers\Admin\PostController as AdminPostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'index'])
    ->name('home');

Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'verified'])
    ->group(function(){
    Route::resources('posts', AdminPostController::class);
    Route::get('dashboard', [AdminMainController::class, 'dashboard'])->name('dashboard');
});

require __DIR__.'/auth.php';
