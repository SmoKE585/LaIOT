<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Logic\SystemClass;
use App\Models\Logic\SystemObject;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        SystemClass::factory(10)->create();
        SystemObject::factory(50)->create();
    }
}
