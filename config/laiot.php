<?php

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [
    'path_to_php' => env('PATH_TO_PHP', ''),
    'place_to_save_code' => env('PLACE_TO_SAVE_CODE', 'files'),
    'install_datetime' => env('INSTALL_DATETIME', ''),
    'base_dir' => env('BASE_DIR', ''),
];
