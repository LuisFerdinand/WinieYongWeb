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
            $table->string('name');
            $table->text('description');
            $table->string('image_url');
            $table->integer('stock');
            $table->decimal('price', 12, 2);
            $table->string('category')->nullable(); // Optional
            $table->string('model_number')->nullable(); // Optional
            $table->text('specifications')->nullable(); // Optional
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
