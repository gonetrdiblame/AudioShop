<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

Route::get('/main', [ServiceController::class, 'main'])->name('main');


Route::get('/', [PageController::class, 'index'])->name('pages.index');
Route::get('/service/{service}', [PageController::class, 'show'])->name('pages.services.show');


//Newsletter
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
