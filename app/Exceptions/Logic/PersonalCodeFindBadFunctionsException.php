<?php

namespace App\Exceptions\Logic;

use Exception;
use Throwable;

class PersonalCodeFindBadFunctionsException extends Exception
{
    public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
