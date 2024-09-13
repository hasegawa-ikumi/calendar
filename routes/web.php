<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/', [PostController::class, 'yearIndex']); 
Route::get('/index/{year}', [PostController::class, 'index']); 
Route::get('/create/{year}/{month}', [PostController::class, 'create']);
Route::post('/posts/', [PostController::class, 'store']); 
Route::get('/posts/{year}/{month}/{date}', [PostController::class, 'show2']);
Route::get('/index/{year}/{month}', [PostController::class, 'month'])->name('month');
Route::get('/posts/{post}', [PostController::class, 'show']);
//Route::get('/posts/{year}/{month}/{date｝', [PostController::class, 'day']);
//Route::get('/posts/{year}/{month}/{date}', [PostController::class, 'create']);
Route::get('/posts/{post}/edit',[PostController::class,'edit']);
Route::delete('/posts/{post}',[PostController::class,'delete']);
require __DIR__.'/auth.php';