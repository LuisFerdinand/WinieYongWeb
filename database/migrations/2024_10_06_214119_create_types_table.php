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
        Schema::create('types', function (Blueprint $table) {
            $table->id('type_id');
            $table->foreignId('category_id');
            $table->foreignId('brand_id');
            $table->string('type_name', 100)->unique();
            $table->string('type_slug', 100)->unique();
            $table->text('type_description')->nullable();
            $table->string('type_image', 255)->nullable();
            $table->string('type_image_url', 255)->nullable();
            $table->string('type_availability', 255)->default(1);
            $table->integer('type_engine_power')->nullable(); // in HP
            $table->integer('type_operating_weight')->nullable(); // in tons
            $table->integer('type_bucket_capacity')->nullable(); // in cubic meters
            $table->integer('type_max_digging_depth')->nullable(); // in meters
            $table->integer('type_fuel_capacity')->nullable(); // in liters
            $table->integer('type_max_speed')->nullable(); // in km/h
            $table->timestamps();
            $table->integer('type_length')->default(10);  // in meters
            $table->integer('type_width')->default(10);   // in meters
            $table->integer('type_height')->default(10);  // in meters

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('types');
    }
};
