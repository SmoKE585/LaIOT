<?php

use App\Models\Logic\SystemClass;
use App\Models\Logic\SystemProperty;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

if (!function_exists('put_to_env')) {
    /**
     * @throws Exception
     */
    function put_to_env($envKey, $envValue)
    {
        $envKey = \Illuminate\Support\Str::upper($envKey);

        $envFile = app()->environmentFilePath();
        $str = file_get_contents($envFile);

        $str .= "\n"; // In case the searched variable is in the last line without \n
        $keyPosition = strpos($str, "{$envKey}=");
        $endOfLinePosition = strpos($str, "\n", $keyPosition);
        $oldLine = substr($str, $keyPosition, $endOfLinePosition - $keyPosition);

        // If key does not exist, add it
        if (!$keyPosition || !$endOfLinePosition || !$oldLine) {
            $str .= "{$envKey}={$envValue}\n";
        } else {
            $str = str_replace($oldLine, "{$envKey}={$envValue}", $str);
        }

        $str = substr($str, 0, -1);

        //Чистим лишние переносы строк
        $str = preg_replace("#(\n ?){3,}#", "\n", $str);

        if (!file_put_contents($envFile, $str)) throw new Exception('Не удалось записать .env файл!');

        Artisan::call('config:clear');

        return true;
    }
}

if (!function_exists('declension')) {
    function declension(int $int, string $string): string
    {
        return \Drandin\DeclensionNouns\Facades\DeclensionNoun::make($int, $string);
    }
}

if (!function_exists('storeProperty')) {
    function storeProperty(array $property, array $setting) : SystemProperty
    {
        return DB::transaction(function () use ($property, $setting) {
            $prop = SystemProperty::updateOrCreate([
                'id' => $property['id']
            ], $property);

            $prop->setting()->updateOrCreate([
                'system_property_id' => $prop->id
            ], $setting);

            return $prop;
        });
    }
}

if (!function_exists('debmes')) {
    function debmes(string $message, string $type, string $path = 'LaIOT') : void
    {
        try {
            \Illuminate\Support\Facades\Log::build([
                'driver' => 'single',
                'path' => storage_path('logs/debmes/' . $path . '-'. now()->toDateString() . '.log'),
            ])->{$type}($message);
        } catch (Throwable $exception) {
            \Illuminate\Support\Facades\Log::build([
                'driver' => 'single',
                'path' => storage_path('logs/debmes/LaIOT-'. now()->toDateString() . '.log'),
            ])->error($message);
        }
    }
}

if (!function_exists('runScript')) {
    function runScript(string|int $id)
    {
        return Artisan::call('logic:runScript', [
            'script_id' => 1
        ]);
    }
}

if (!function_exists('runScriptSafe')) {
    function runScriptSafe(string|int $id, $uniqueFor = 1)
    {
        return \App\Jobs\Logic\RunScriptSafeJob::dispatch($id, $uniqueFor)->onQueue('high');
    }
}
