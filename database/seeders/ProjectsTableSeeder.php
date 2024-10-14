<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'project_name' => 'City Center Skyscraper',
                'project_description' => 'Provided heavy machinery for the construction of a 50-story skyscraper in the heart of downtown.',
                'project_date' => '2023-01-15',
                'project_image' => 'path/to/city-center-skyscraper.jpg',
                'project_client' => 'ABC Construction',
                'project_status' => 'completed',
                'project_highlights' => 'Successfully completed ahead of schedule.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'Mountain Highway Expansion',
                'project_description' => 'Supplied excavators and bulldozers for a challenging mountain highway expansion project.',
                'project_date' => '2023-03-20',
                'project_image' => 'path/to/mountain-highway-expansion.jpg',
                'project_client' => 'XYZ Builders',
                'project_status' => 'ongoing',
                'project_highlights' => 'Overcame challenging terrain with innovative solutions.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'Offshore Wind Farm',
                'project_description' => 'Provided specialized equipment for the installation of an offshore wind farm project.',
                'project_date' => '2023-05-05',
                'project_image' => 'path/to/offshore-wind-farm.jpg',
                'project_client' => 'Green Energy Corp',
                'project_status' => 'completed',
                'project_highlights' => 'Contributed to a significant increase in renewable energy output.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more projects as needed
        ]);
    }
}
