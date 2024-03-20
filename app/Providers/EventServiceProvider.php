<?php

namespace App\Providers;

use App\Actions\FirstInstallAction;
use App\Events\MQTTIncomingValueEvent;
use App\Listeners\MQTTIncomingValueProcessingListener;
use App\Models\Settings\Setting;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Database\Events\MigrationsEnded;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        MQTTIncomingValueEvent::class => [
            MQTTIncomingValueProcessingListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {

    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
