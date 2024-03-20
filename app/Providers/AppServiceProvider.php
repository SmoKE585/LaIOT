<?php

namespace App\Providers;

use App\Models\Logic\SystemProperty;
use App\Models\Logic\SystemScript;
use App\Observers\Logic\SystemPropertyObserver;
use App\Observers\Logic\SystemScriptObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        SystemProperty::observe(SystemPropertyObserver::class);
        SystemScript::observe(SystemScriptObserver::class);
    }
}
