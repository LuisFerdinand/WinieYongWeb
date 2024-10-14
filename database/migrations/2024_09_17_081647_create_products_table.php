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
<<<<<<< HEAD
            $table->string('slug');                            // Add slug field
            $table->string('name');
            $table->text('description');
            $table->string('image_url');
            $table->string('model_number')->nullable(); // Optional
            $table->decimal('power_output', 8, 2)->nullable(); // Add power output
            $table->string('dimensions')->nullable();          // Add dimensions
            $table->string('fuel_type')->nullable();           // Add fuel type
            $table->text('usage_instructions')->nullable();    // Add usage instructions
=======
            $table->string('name');
            $table->text('description');
            $table->string('image_url');
            $table->integer('stock');
            $table->decimal('price', 12, 2);
            $table->string('category')->nullable(); // Optional
            $table->string('model_number')->nullable(); // Optional
            $table->text('specifications')->nullable(); // Optional
>>>>>>> origin/Rental
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
