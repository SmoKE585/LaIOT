<?php

namespace App\Exceptions\Logic;

use Exception;
use Illuminate\Support\Facades\Log;
use Throwable;

class PersonalCodeEmptyCodeException extends Exception
{
    public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
