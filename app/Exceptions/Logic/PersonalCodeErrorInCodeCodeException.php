<?php

namespace App\Exceptions\Logic;

use Exception;
use Illuminate\Support\Facades\Log;

class PersonalCodeErrorInCodeCodeException extends Exception
{
    public function __construct($message, $path = null)
    {
        debmes($message, 'error', $path);
    }

    public function report()
    {

    }
}
