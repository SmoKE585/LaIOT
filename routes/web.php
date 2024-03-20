<?php

use Illuminate\Support\Facades\Route;

if(empty(config('laiot.install_datetime'))) {
    Route::name('install')->group(function () {
        Route::get('/install', \App\Livewire\Install\Index::class);
    });

    Route::get('/{any}', function () {
        return redirect()->route('install');
    })->where('any', '.*');
} else {
    //Если заходят в установку, когда все уже установили
    Route::get('/install/{step?}', function () {
        return redirect()->route('backend.dashboard');
    })->where('step', '.*');

    Route::prefix('backend')->name('backend.')->group(function () {
        Route::middleware('auth')->group(function () {
            Route::get('/dashboard', \App\Livewire\Backend\Index::class)->name('dashboard');

            Route::prefix('logic')->name('logic.')->group(function () {
                Route::get('/classes', \App\Livewire\Backend\Logic\Classes::class)->name('classes');
                Route::get('/classes/manage/{id?}', \App\Livewire\Backend\Logic\ClassesManage::class)->name('classes.manage');
                Route::get('/classes/view/{class}', \App\Livewire\Backend\Logic\ClassesView::class)->name('classes.view');

                Route::get('/objects', \App\Livewire\Backend\Logic\Objects::class)->name('objects');
                Route::get('/objects/manage/{id?}/{related_class?}', \App\Livewire\Backend\Logic\ObjectsManage::class)->name('objects.manage');
                Route::get('/objects/view/{object}', \App\Livewire\Backend\Logic\ObjectsView::class)->name('objects.view');

                Route::get('/methods', \App\Livewire\Backend\Logic\Methods::class)->name('methods');
                Route::get('/scripts', \App\Livewire\Backend\Logic\Scripts::class)->name('scripts');
                Route::get('/scripts/manage/{id?}', \App\Livewire\Backend\Logic\ScriptsManage::class)->name('scripts.manage');
            });

            Route::prefix('users')->group(function () {
                Route::get('/', \App\Livewire\Backend\Users\Users::class)->name('users');
                Route::get('/manage/{id?}', \App\Livewire\Backend\Users\UsersManage::class)->name('users.manage');
            });

            Route::get('/MQTT', \App\Livewire\Backend\MQTT\Index::class)->name('MQTT.index');

            Route::prefix('settings')->group(function () {
                Route::get('/general', \App\Livewire\Backend\Settings\Index::class)->name('settings.general');
            });
        });
    });

    Route::get('/'.config('laiot.default_login_path'), \App\Livewire\Auth::class)->name('login');
}
