<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartsTable extends Migration
{
    public function up()
    {
        Schema::create('parts', function (Blueprint $table) {
            $table->id('part_id');
            $table->string('part_name');
            $table->string('part_slug')->unique();
            $table->text('part_description');
            $table->integer('part_price');
            $table->string('part_image_url', 255)->nullable();
            $table->string('part_image', 255)->nullable();
            $table->string('part_category');
            $table->string('part_contact');
            $table->string('part_location');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('parts');
    }
}
