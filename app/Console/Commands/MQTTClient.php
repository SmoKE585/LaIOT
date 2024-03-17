<?php

namespace App\Console\Commands;

use App\Events\MQTTIncomingValue;
use Illuminate\Console\Command;
use PhpMqtt\Client\Exceptions\DataTransferException;
use PhpMqtt\Client\Exceptions\InvalidMessageException;
use PhpMqtt\Client\Exceptions\MqttClientException;
use PhpMqtt\Client\Exceptions\ProtocolViolationException;
use PhpMqtt\Client\Exceptions\RepositoryException;
use PhpMqtt\Client\Facades\MQTT;

class MQTTClient extends Command
{
    protected $signature = 'run:mqtt';

    protected $description = 'Запускает чтение топиков от MQTT сервера';

    public function handle()
    {
        try {
            $mqtt = MQTT::connection();
            $mqtt->subscribe('#', function (string $topic, string $message) {
                MQTTIncomingValue::dispatch(['topic' => $topic, 'value' => $message]);

                $this->info("Received message on topic {$topic} - {$message}");
            });
            $mqtt->loop();
        } catch (\Throwable $exception) {
            //\Log::critical('Ошибка запуска MQTT'. json_encode($exception));
        }
    }
}
