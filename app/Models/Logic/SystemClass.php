<?php

namespace App\Models\Logic;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Korridor\LaravelHasManyMerged\HasManyMerged;
use Korridor\LaravelHasManyMerged\HasManyMergedRelation;
use Reedware\LaravelCompositeRelations\CompositeHasMany;
use Reedware\LaravelCompositeRelations\HasCompositeRelations;

/**
 *
 *
 * @property int $id
 * @property int $parent_id
 * @property string $title
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SystemClass newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SystemClass newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SystemClass query()
 * @method static \Illuminate\Database\Eloquent\Builder|SystemClass whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemClass whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemClass whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemClass whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemClass whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemClass whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SystemClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'title',
        'description',
    ];

    public function objects() : HasMany
    {
        return $this->hasMany(SystemObject::class);
    }

    public function children() : HasOne
    {
        return $this->hasOne(self::class, 'parent_id', 'id');
    }

    public function properties()
    {
        return $this->hasMany(SystemProperty::class, 'system_class_id', 'id')->orWhereColumn('system_properties.system_class_id', '=', $this->parent_id);
    }
}
