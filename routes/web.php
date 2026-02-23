<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::middleware(['throttle'])->group(function () {
    Route::view('/', 'index')->name('index');
});
