<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('product_slug')->unique();
            $table->string('product_name');
            $table->text('product_description');
            $table->integer('product_price');
            $table->string('product_image_url', 255)->nullable();
            $table->string('product_image', 255)->nullable();
            $table->string('product_model_number')->nullable();
            $table->decimal('product_power_output', 8, 2)->nullable();
            $table->string('product_dimensions')->nullable();
            $table->string('product_fuel_type')->nullable();
            $table->text('product_usage_instructions')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
