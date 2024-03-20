<?php

namespace App\Actions;

use App\Models\Logic\SystemClass;
use App\Models\Settings\Setting;
use Illuminate\Support\Facades\DB;

class FirstInstallAction
{
    public function run()
    {
        DB::transaction(function () {
            $basicClass = SystemClass::updateOrCreate([
                'title' => 'Система',
            ], [
                'title' => 'Система',
                'description' => 'Системный класс, который включает в себя базовый набор функций для работы системы.',
            ]);

            $basicClass->objects()->createMany([
                [
                    'system_class_id' => $basicClass->id,
                    'title' => 'Таймеры',
                    'description' => 'Набор таймеров, которые система вызывает автоматически.',
                ],
                [
                    'system_class_id' => $basicClass->id,
                    'title' => 'Система',
                    'description' => 'Все информация о работе системы.',
                ]
            ]);
        });

        //put_to_env('INSTALL_DATETIME', "'".now()->toDateTimeString()."'");
    }
}
