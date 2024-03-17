<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MQTTValue extends Model
{
    use HasFactory;

    protected $table = 'mqtt_values';

    protected $fillable = [
        'server_id',
        'topic',
        'value',
        'path',
    ];

    protected $casts = [
        'path' => 'object'
    ];
}
