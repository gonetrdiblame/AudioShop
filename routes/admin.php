<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ServiceController;

Route::middleware('auth')->group(function () {
    Route::resource('/admin/services', ServiceController::class);
});