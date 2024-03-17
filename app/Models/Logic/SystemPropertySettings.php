<?php

namespace App\Models\Logic;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemPropertySettings extends Model
{
    use HasFactory;

    protected $fillable = [
        'system_property_id',
        'keep_history',
        'validation',
    ];
}
