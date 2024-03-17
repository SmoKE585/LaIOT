<?php

namespace Database\Factories\Logic;

use App\Models\Logic\SystemClass;
use App\Models\Logic\SystemObject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class SystemObjectFactory extends Factory
{
    protected $model = SystemObject::class;

    public function definition(): array
    {
        return [
            'system_class_id' => SystemClass::inRandomOrder()->first()->id,
            'title' => fake('ru')->unique()->sentence(3),
            'description' => fake('ru')->text(50),
        ];
    }
}
