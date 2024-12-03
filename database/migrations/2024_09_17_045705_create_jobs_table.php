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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id('job_id');
            $table->string('job_title');
            $table->string("job_slug")->unique();
            $table->text('job_description'); // Job descriptionp
            $table->string('job_department'); // Job position
            $table->enum('job_work_type', ['Remote', 'Onsite', 'Hybrid']); // Remote or On-site
            $table->integer('job_total_positions'); // Total positions available
            $table->text('job_requirements'); // Job requirements
            $table->enum('job_status', ['Open', 'Closed'])->default('Open'); // Status (open/closed)
            $table->string('job_image', 255)->nullable();
            $table->string('job_image_url', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
