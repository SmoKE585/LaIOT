<?php

namespace Database\Factories\Logic;

use App\Models\Logic\SystemClass;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class SystemClassFactory extends Factory
{
    protected $model = SystemClass::class;

    public function definition(): array
    {
        return [
            'parent_id' => 0,
            'title' => fake()->unique()->sentence(8),
            'description' => fake()->text(50),
        ];
    }

//    public function configure()
//    {
//        return $this->afterCreating(function (SystemClass $class) {
//            $class->parent_id = rand(0, 20);
//            $class->save();
//        });
//    }
}
