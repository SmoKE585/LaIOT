<?php

namespace App\Models\Logic;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class SystemProperties extends Model
{
    use HasFactory;

    protected $fillable = [
        'system_class_id',
        'system_object_id',
        'title',
        'value',
    ];

    public function setting() : HasOne
    {
        return $this->hasOne(SystemPropertySettings::class, 'system_property_id', 'id');
    }
}
