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

        Schema::create('system_methods', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('system_class_id')->index()->nullable();
            $table->bigInteger('system_object_id')->index()->nullable();
            $table->foreign('system_object_id')->references('id')->on('system_objects');
            $table->string('title');
            $table->string('description')->nullable();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_methods');
    }
};
