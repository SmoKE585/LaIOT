<?php

namespace App\Models\Logic;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 *
 *
 * @property int $id
 * @property int $class_id
 * @property string $title
 * @property string $description
 * @method static \Illuminate\Database\Eloquent\Builder|SystemObject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SystemObject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SystemObject query()
 * @method static \Illuminate\Database\Eloquent\Builder|SystemObject whereClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemObject whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemObject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemObject whereTitle($value)
 * @mixin \Eloquent
 */
class SystemObject extends Model
{
    use HasFactory;

    protected $fillable = [
        'system_class_id',
        'title',
        'description',
    ];

    public function class() : BelongsTo
    {
        return $this->belongsTo(SystemClass::class, 'system_class_id', 'id');
    }
}
