<?php

namespace App\Models\Logic;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property int|null $class_id
 * @property int|null $object_id
 * @property string $title
 * @property string $description
 * @method static \Illuminate\Database\Eloquent\Builder|Method newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Method newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Method query()
 * @method static \Illuminate\Database\Eloquent\Builder|Method whereClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Method whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Method whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Method whereObjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Method whereTitle($value)
 * @mixin \Eloquent
 */
class Method extends Model
{
    use HasFactory;
}
