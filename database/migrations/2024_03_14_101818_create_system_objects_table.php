<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('system_objects', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('system_class_id')->index();
            $table->foreign('system_class_id')->references('id')->on('system_classes');
            $table->string('title')->unique();
            $table->string('description')->nullable();

            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_objects');
    }
};
