<?php

use Illuminate\Support\Facades\Route;

if(empty(config('laiot.install_datetime'))) {
    Route::name('install')->group(function () {
        Route::get('/install', \App\Livewire\Welcome\Index::class);
    });
} else {
    Route::prefix('backend')->name('backend.')->group(function () {
        Route::middleware('auth')->group(function () {
            Route::get('/dashboard', \App\Livewire\Backend\Index::class)->name('index');

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

            Route::get('/modules/MQTT', \App\Livewire\Modules\MQTT\Index::class)->name('modules.MQTT.index');

            Route::prefix('settings')->group(function () {
                Route::get('/general', \App\Livewire\Backend\Settings\General::class)->name('settings.general');
            });
        });
    });

    Route::get('/login', \App\Livewire\Auth::class)->name('login');
}
