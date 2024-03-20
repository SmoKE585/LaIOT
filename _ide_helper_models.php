<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models\Logic{
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
	class Method extends \Eloquent {}
}

namespace App\Models\Logic{
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
 */
	class Script extends \Eloquent {}
}

namespace App\Models\Logic{
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
 */
	class SystemClass extends \Eloquent {}
}

namespace App\Models\Logic{
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
 */
	class SystemObject extends \Eloquent {}
}

namespace App\Models\Settings{
/**
 *
 *
 * @property int $id
 * @property int $use_db_for_code
 * @property int $script_rate_limit
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereScriptRateLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereUseDbForCode($value)
 */
	class Setting extends \Eloquent {}
}

namespace App\Models{
/**
 *
 *
 * @property int $id
 * @property string $login
 * @property int $phone
 * @property string $realname
 * @property string|null $email
 * @property mixed $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRealname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

