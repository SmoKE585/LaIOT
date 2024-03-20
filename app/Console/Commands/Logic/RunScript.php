<?php

namespace App\Console\Commands\Logic;

use App\Actions\PersonalCodeControl;
use App\Models\Logic\SystemScript;
use Illuminate\Console\Command;

class RunScript extends Command
{
    protected $signature = 'logic:runScript {script_id}';

    protected $description = 'Запускает выполнение кода';

    public function handle()
    {
        (new PersonalCodeControl())->setModel(SystemScript::findOrFail($this->argument('script_id')))->run();
    }
}
