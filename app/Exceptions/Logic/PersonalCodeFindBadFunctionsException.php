<?php

namespace App\Exceptions\Logic;

use Exception;

class PersonalCodeFindBadFunctionsException extends Exception
{
    public function __construct($message, $path = null)
    {
        debmes($message, 'error', $path);
    }

    public function report()
    {

    }
}
