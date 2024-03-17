<?php

namespace App\Providers;

use App\Models\Logic\SystemProperties;
use App\Observers\Logic\SystemPropertiesObserver;
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
        SystemProperties::observe(SystemPropertiesObserver::class);
    }
}
