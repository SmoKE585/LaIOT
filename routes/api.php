<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;


Route::prefix('script')->name('api.')->group(function () {
    Route::middleware(['throttle:scripts'])->any('{hash}', \App\Http\Controllers\API\ScriptController::class)->name('script');
});
