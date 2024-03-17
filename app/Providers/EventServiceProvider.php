<?php

namespace App\Providers;

use App\Actions\FirstInstallAction;
use App\Events\MQTTIncomingValue;
use App\Listeners\MQTTIncomingValueProcessing;
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
        MQTTIncomingValue::class => [
            MQTTIncomingValueProcessing::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //Записываем настройки дефолтные после миграции, если их нет
        Event::listen(MigrationsEnded::class, function (MigrationsEnded $event) {
            if($event->method === 'up' && empty(config('laiot.install_datetime'))) {
                (new FirstInstallAction())->run();
            }
        });
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
