<?php

namespace App\Listeners;

use App\Events\MQTTIncomingValueEvent;
use App\Models\Modules\MQTTValue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class MQTTIncomingValueProcessingListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(MQTTIncomingValueEvent $event): void
    {
        try {
            $event->data['server_id'] = 1;
            $event->data['path'] = [];
            foreach (explode('/', $event->data['topic']) as $key => $path) {
                //if($key > 0 && $path == '') continue;

                $event->data['path']['sub_'.$key] = $path;
            }

            MQTTValue::select('id')->updateOrCreate([
                'topic' => $event->data['topic']
            ], $event->data);
        } catch (\Throwable $exception) {
            //\Log::warning($exception);
        }
    }
}
