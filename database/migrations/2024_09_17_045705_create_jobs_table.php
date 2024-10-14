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
            $table->id();
            $table->string('title'); // Job title
            $table->text('description'); // Job description
            $table->string('position'); // Job position
            $table->enum('work_type', ['remote', 'on-site']); // Remote or On-site
            $table->integer('total_positions'); // Total positions available
            $table->text('requirements'); // Job requirements
            $table->enum('status', ['open', 'closed'])->default('open'); // Status (open/closed)
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
