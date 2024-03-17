<?php

namespace App\Rules;

use Closure;
use Cron\CronExpression;
use Illuminate\Contracts\Validation\ValidationRule;

class Cron implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (CronExpression::isValidExpression($value) === false) {
            $fail("Указано неверное правило для CRON");
        }
    }
}
