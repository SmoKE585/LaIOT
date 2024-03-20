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
        Schema::create('system_properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('system_class_id')->constrained();
            $table->foreignId('system_object_id')->nullable()->constrained();
            $table->bigInteger('title');
            $table->bigInteger('value')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_properties');
    }
};
