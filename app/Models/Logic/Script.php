<?php

namespace App\Models\Logic;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $allow_external
 * @property int $active
 * @property string|null $cron
 * @method static \Illuminate\Database\Eloquent\Builder|Script newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Script newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Script query()
 * @method static \Illuminate\Database\Eloquent\Builder|Script whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Script whereAllowExternal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Script whereCron($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Script whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Script whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Script whereTitle($value)
 * @mixin \Eloquent
 */
class Script extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'allow_external',
        'active',
        'cron',
    ];
}
