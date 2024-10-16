<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('name');
            $table->text('description');
            $table->string('image_url');
            $table->string('model_number')->nullable();
            $table->decimal('power_output', 8, 2)->nullable();
            $table->string('dimensions')->nullable();
            $table->string('fuel_type')->nullable();
            $table->text('usage_instructions')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
