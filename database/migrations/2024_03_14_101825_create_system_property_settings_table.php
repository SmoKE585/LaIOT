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
        Schema::create('system_property_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('system_property_id')->constrained()->cascadeOnDelete();
            $table->integer('keep_history')->default(0);
            $table->string('validation')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_property_settings');
    }
};
