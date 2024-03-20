<?php

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [
    'path_to_php' => env('PATH_TO_PHP', ''),
    'place_to_save_code' => env('PLACE_TO_SAVE_CODE', 'files'),
    'install_datetime' => env('INSTALL_DATETIME', ''),
    'base_dir' => env('BASE_DIR', ''),
    'is_windows' => env('IS_WINDOWS', ''),
    'script_rate_limit' => env('SCRIPT_RATE_LIMIT', '60'),
    'disable_login_by_pass' => env('DISABLE_LOGIN_BY_PASS', false),
    'default_login_path' => env('DEFAULT_LOGIN_PATH', 'login'),
];
