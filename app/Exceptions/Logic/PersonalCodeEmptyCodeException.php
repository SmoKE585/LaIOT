<?php

namespace App\Exceptions\Logic;

use Exception;
use Illuminate\Support\Facades\Log;

class PersonalCodeEmptyCodeException extends Exception
{
    public function __construct($message, $path = null)
    {
        debmes($message, 'warning', $path);
    }

    public function report()
    {

    }
}
