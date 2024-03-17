<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;


Route::prefix('script')->name('api.')->group(function () {
    Route::middleware(['throttle:scripts'])->any('{hash}', function ($hash) {
        try {
            $decrypt = Crypt::decryptString($hash);

            $model = \App\Models\Logic\Script::where('allow_external', 1)->where('active', '1')->where('id', $decrypt)->firstOrFail();
        } catch (Throwable $exception) {
            abort(404);
        }

        try {
            (new \App\Actions\PersonalCodeControl())->setModel($model)->run();
        } catch (Throwable $exception) {
            abort(500);
        }
    })->name('script');
});
