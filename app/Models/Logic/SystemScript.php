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
 * @method static \Illuminate\Database\Eloquent\Builder|SystemScript newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SystemScript newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SystemScript query()
 * @method static \Illuminate\Database\Eloquent\Builder|SystemScript whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemScript whereAllowExternal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemScript whereCron($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemScript whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemScript whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemScript whereTitle($value)
 * @mixin \Eloquent
 */
class SystemScript extends Model
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
