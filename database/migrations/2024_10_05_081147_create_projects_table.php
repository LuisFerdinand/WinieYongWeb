<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id(); // Unique ID for the project
            $table->string('project_name'); // Name of the project
            $table->text('project_description')->nullable(); // Description of the project
            $table->date('project_date'); // Date of the project
            $table->string('project_image')->nullable(); // Image of the project
            $table->string('project_client')->nullable(); // Client associated with the project
            $table->string('project_status')->default('ongoing'); // Status of the project (e.g., ongoing, completed)
            $table->text('project_highlights')->nullable(); // Key highlights or achievements in the project
            $table->timestamps(); // Timestamps for created and updated times
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
