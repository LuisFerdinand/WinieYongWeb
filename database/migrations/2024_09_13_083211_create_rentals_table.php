<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the rental property
            $table->text('description'); // Description of the property
            $table->decimal('price', 15, 2); // Price of the rental in Rupiah
            $table->string('image_url')->nullable(); // URL to an image of the property
            $table->string('category'); // Category of the rental property
            $table->boolean('availability_status')->default(true); // Availability status of the rental
            $table->date('available_from')->nullable(); // When the rental is available from
            $table->date('available_to')->nullable(); // Until when the rental is available
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rentals');
    }
}
