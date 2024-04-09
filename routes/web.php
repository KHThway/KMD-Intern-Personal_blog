<?php

use App\Http\Controllers\AvatarController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserpanelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('panels');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::patch('/profile/edit', [AvatarController::class, 'update'])->name('profile.avatar');
    Route::resource('/posts', PostController::class);
});

Route::get('/userpanel', [UserpanelController::class, 'index'])->name('userpanel.index');
Route::get('/userpanel/show/{id}', [UserpanelController::class, 'show'])->name('userpanel.show');
Route::get('/userpanel/home', [UserpanelController::class, 'home'])->name('userpanel.home');

require __DIR__ . '/auth.php';
