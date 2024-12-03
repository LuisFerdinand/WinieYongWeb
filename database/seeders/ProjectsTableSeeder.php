<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'project_name' => 'City Center Skyscraper',
                'project_slug' => 'city-center-skyscraper',
                'project_description' => 'Executed the provision of heavy machinery for the construction of a 50-story skyscraper located in the central business district of downtown.',
                'project_date' => '2023-01-15',
                'project_image_url' => 'https://storage.googleapis.com/a1aa/image/NlOmWPaD9U4EKB19cbkVs8SyvONeGU5VigkQceh6L4AVhG3TA.jpg',
                'project_client' => 'ABC Construction',
                'project_status' => 'Completed',
                'project_highlights' => 'Successfully completed the project ahead of the scheduled timeline, demonstrating exceptional efficiency and coordination.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'Mountain Highway Expansion',
                'project_slug' => 'mountain-highway-expansion',
                'project_description' => 'Provided advanced excavators and bulldozers for the expansion of a critical mountain highway, addressing complex geographical challenges.',
                'project_date' => '2023-03-20',
                'project_image_url' => 'https://storage.googleapis.com/a1aa/image/rSrQzdZDMA61FJleRAVeIfErGoRaogpdzEcmhc19cGyu1NunA.jpg',
                'project_client' => 'XYZ Builders',
                'project_status' => 'Ongoing',
                'project_highlights' => 'Successfully navigated challenging terrain through innovative engineering solutions, ensuring project continuity and safety.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'Offshore Wind Farm',
                'project_slug' => 'offshore-wind-farm',
                'project_description' => 'Supplied specialized equipment and technical expertise for the installation of an offshore wind farm, contributing to sustainable energy initiatives.',
                'project_date' => '2023-05-05',
                'project_image_url' => 'https://storage.googleapis.com/a1aa/image/x11LJEW5WFoONBYYaeK0ZRmS3CPDwLkBeNy3OLR4fyaQ8NunA.jpg',
                'project_client' => 'Green Energy Corp',
                'project_status' => 'Completed',
                'project_highlights' => 'Played a pivotal role in enhancing renewable energy output, aligning with global sustainability goals.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'Urban Transit System',
                'project_slug' => 'urban-transit-system',
                'project_description' => 'Managed the upgrade of an urban transit system, incorporating modern technology to enhance efficiency and passenger experience.',
                'project_date' => '2023-07-10',
                'project_image_url' => 'https://storage.googleapis.com/a1aa/image/wbopVo5Ox6KmF1BsfWLfYSfOVIO4VkygzQbVptLlbebm9bcPB.jpg',
                'project_client' => 'Metro Transit Authority',
                'project_status' => 'Ongoing',
                'project_highlights' => 'Utilized state-of-the-art technology to improve transit times and system reliability, positively impacting daily commuters.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'Residential Community Development',
                'project_slug' => 'residential-community-development',
                'project_description' => 'Oversaw the construction of a modern residential community, focusing on sustainable practices and community engagement.',
                'project_date' => '2023-09-01',
                'project_image_url' => 'https://storage.googleapis.com/a1aa/image/ae89rZ5e1ZgeeTVKKImMYKwHCaMU8rLC59jPbkpuFh7bBccPB.jpg',
                'project_client' => 'Home Builders Inc.',
                'project_status' => 'Planned',
                'project_highlights' => 'Incorporated eco-friendly building materials and practices, setting a benchmark for future developments in the region.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'Luxury Hotel Development',
                'project_slug' => 'luxury-hotel-development',
                'project_description' => 'Led the construction of a luxury hotel featuring 250 rooms, upscale amenities, and sustainable design principles.',
                'project_date' => '2023-10-01',
                'project_image_url' => 'https://storage.googleapis.com/a1aa/image/Bzf4Xe1zxmh9RU0ikRMkeWCoEsUa5q0DdbTN1Qc7yzb6BOunA.jpg',
                'project_client' => 'Elite Hospitality Group',
                'project_status' => 'Completed',
                'project_highlights' => 'Achieved LEED certification for sustainability and energy efficiency.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'State-of-the-Art Sports Complex',
                'project_slug' => 'state-of-the-art-sports-complex',
                'project_description' => 'Constructed a multi-purpose sports complex, including indoor and outdoor facilities for various sports and community events.',
                'project_date' => '2023-09-15',
                'project_image_url' => 'https://storage.googleapis.com/a1aa/image/fuVeRGiFdfAbPpo855Pexz0ROuYEfY1Fbk536yiyHwmhM44eE.jpg',
                'project_client' => 'City Recreation Department',
                'project_status' => 'Completed',
                'project_highlights' => 'Successfully integrated community feedback into the design, enhancing local engagement.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'Highway Bridge Rehabilitation',
                'project_slug' => 'highway-bridge-rehabilitation',
                'project_description' => 'Managed the rehabilitation of a major highway bridge, ensuring structural integrity and compliance with safety standards.',
                'project_date' => '2023-08-20',
                'project_image_url' => 'https://storage.googleapis.com/a1aa/image/0fxDlEmejJkpKEjt3yK3eVefq2zLrg4ssSWQ4I9vUf3tlwx9E.jpg',
                'project_client' => 'Department of Transportation',
                'project_status' => 'Completed',
                'project_highlights' => 'Completed the project with minimal disruption to traffic flow.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'Green Roof Installation',
                'project_slug' => 'green-roof-installation',
                'project_description' => 'Executed the installation of a green roof on a commercial building, promoting biodiversity and energy efficiency.',
                'project_date' => '2023-07-05',
                'project_image_url' => 'https://storage.googleapis.com/a1aa/image/1Dwz4pFDT6JqDxcWUy2wBls1afvie1autXeEWqa2Eh4oFOunA.jpg',
                'project_client' => 'Urban Development Corp',
                'project_status' => 'Completed',
                'project_highlights' => 'Improved building insulation and reduced urban heat island effect.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'Industrial Warehouse Construction',
                'project_slug' => 'industrial-warehouse-construction',
                'project_description' => 'Oversaw the construction of a state-of-the-art industrial warehouse designed for logistics and distribution.',
                'project_date' => '2023-06-15',
                'project_image_url' => 'https://storage.googleapis.com/a1aa/image/GQdFrZz54I7sMdXQ7Rhfr7L9P0Fb0x1EmeT3s8DfSzA0GOunA.jpg',
                'project_client' => 'Logistics Solutions Inc.',
                'project_status' => 'Completed',
                'project_highlights' => 'Incorporated advanced automation technologies for efficient operations.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'Community Park Revitalization',
                'project_slug' => 'community-park-revitalization',
                'project_description' => 'Revitalized a community park with new recreational facilities, landscaping, and walking paths to enhance public enjoyment.',
                'project_date' => '2023-05-10',
                'project_client' => 'City Council',
                'project_status' => 'Completed',
                'project_highlights' => 'Engaged local volunteers in the landscaping efforts, fostering community spirit.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'University Science Building',
                'project_slug' => 'university-science-building',
                'project_description' => 'Constructed a modern science building for a local university, featuring laboratories and collaborative spaces for research.',
                'project_date' => '2023-04-25',
                'project_client' => 'Local University',
                'project_status' => 'Completed',
                'project_highlights' => 'Designed to facilitate interdisciplinary research and innovation.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'Smart City Infrastructure Project',
                'project_slug' => 'smart-city-infrastructure-project',
                'project_description' => 'Implemented smart city infrastructure, including IoT-enabled traffic systems and energy-efficient street lighting.',
                'project_date' => '2023-03-30',
                'project_client' => 'City Development Authority',
                'project_status' => 'Ongoing',
                'project_highlights' => 'Enhanced urban mobility and reduced energy consumption through innovative technology.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'Coastal Erosion Control',
                'project_slug' => 'coastal-erosion-control',
                'project_description' => 'Developed a comprehensive coastal erosion control project, utilizing natural and engineered solutions to protect shorelines.',
                'project_date' => '2023-02-15',
                'project_client' => 'Environmental Protection Agency',
                'project_status' => 'Ongoing',
                'project_highlights' => 'Implemented sustainable practices to preserve local ecosystems while safeguarding coastal communities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'Renewable Energy Solar Farm',
                'project_slug' => 'renewable-rnergy-solar-farm',
                'project_description' => 'Oversaw the construction of a large-scale solar farm, contributing to the region’s renewable energy goals and reducing carbon footprint.',
                'project_date' => '2023-01-10',
                'project_client' => 'Solar Power Solutions',
                'project_status' => 'Completed',
                'project_highlights' => 'Significantly increased local renewable energy production, supporting community sustainability initiatives.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
