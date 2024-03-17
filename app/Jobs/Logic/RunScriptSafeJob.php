<?php

namespace App\Jobs\Logic;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Artisan;

class RunScriptSafeJob implements ShouldQueue, ShouldBeUnique
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public int $id, public $uniqueFor = 1)
    {
        //
    }

    public function uniqueId(): string
    {
        return $this->id;
    }

    public function handle(): void
    {
        Artisan::call('logic:runScript', [
            'script_id' => $this->id
        ]);
    }
}
