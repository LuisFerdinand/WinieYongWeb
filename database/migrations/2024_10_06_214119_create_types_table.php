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
            // $table->string('type_brand', 100);
            $table->text('type_description')->nullable();
            $table->string('type_image', 255)->nullable();
            $table->string('type_availability', 255)->default(true);
            $table->integer('engine_power')->nullable(); // in HP
            $table->integer('operating_weight')->nullable(); // in tons
            $table->integer('bucket_capacity')->nullable(); // in cubic meters
            $table->integer('max_digging_depth')->nullable(); // in meters
            $table->integer('fuel_capacity')->nullable(); // in liters
            $table->integer('max_speed')->nullable(); // in km/h
            $table->timestamps();
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
