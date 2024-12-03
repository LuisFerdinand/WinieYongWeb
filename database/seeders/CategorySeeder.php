<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'category_name' => 'Excavators',
                'category_slug' => 'excavators',
                'category_description' => 'Heavy-duty equipment designed for digging and material handling.',
                'category_image_url' => 'https://s7d2.scene7.com/is/image/Caterpillar/CM20130721-78722-62413',
            ],
            [
                'category_name' => 'Bulldozers',
                'category_slug' => 'bulldozers',
                'category_description' => 'Powerful construction vehicles for pushing large amounts of materials.',
                'category_image_url' => 'https://s7d2.scene7.com/is/image/Caterpillar/CM20170530-47239-53877',
            ],
            [
                'category_name' => 'Hydraulic Mining Shovels',
                'category_slug' => 'hydraulic-ining-hovels',
                'category_description' => 'Heavy-duty equipment used for digging and loading earth or fragmented rock in mining operations.',
                'category_image_url' => 'https://s7d2.scene7.com/is/image/Caterpillar/C833220',
            ],
            [
                'category_name' => 'Motor Graders',
                'category_slug' => 'motor-graders',
                'category_description' => 'Equipment used for grading and leveling earthworks for road construction, maintenance, and snow removal.',
                'category_image_url' => 'https://s7d2.scene7.com/is/image/Caterpillar/CM20210419-a2c40-180b5',
            ],
            [
                'category_name' => 'Compactors',
                'category_slug' => 'compactors',
                'category_description' => 'Machines designed to compact soil, gravel, or asphalt in construction work, ensuring solid foundations.',
                'category_image_url' => 'https://s7d2.scene7.com/is/image/Caterpillar/CM20201215-90df8-498ab',
            ],
            [
                'category_name' => 'Wheel Loaders',
                'category_slug' => 'wheel-loaders',
                'category_description' => 'Versatile construction machines used for moving, loading, or transporting materials like gravel, sand, or soil.',
                'category_image_url' => 'https://s7d2.scene7.com/is/image/Caterpillar/C842352',
            ],
            [
                'category_name' => 'Cranes',
                'category_slug' => 'cranes',
                'category_description' => 'Heavy machinery used for lifting and moving heavy loads at construction sites.',
            ],
            [
                'category_name' => 'Concrete Mixers',
                'category_slug' => 'concrete-mixers',
                'category_description' => 'Specialized vehicles designed to mix and transport concrete for construction projects.',
            ],
            [
                'category_name' => 'Scaffolding',
                'category_slug' => 'scaffolding',
                'category_description' => 'Temporary structures used to support workers and materials during building construction or maintenance.',
            ],
            [
                'category_name' => 'Power Tools',
                'category_slug' => 'power-tools',
                'category_description' => 'Handheld electrical or pneumatic tools used for drilling, cutting, and other construction tasks.',
            ],
            [
                'category_name' => 'Safety Equipment',
                'category_slug' => 'safety-equipment',
                'category_description' => 'Protective gear and equipment designed to ensure worker safety on construction sites.',
            ],
            [
                'category_name' => 'Trenchers',
                'category_slug' => 'trenchers',
                'category_description' => 'Machines used for digging narrow trenches for pipes, cables, or drainage systems.',
            ],
            [
                'category_name' => 'Dump Trucks',
                'category_slug' => 'dump-trucks',
                'category_description' => 'Heavy-duty vehicles used for transporting and dumping loose materials like sand, gravel, or demolition waste.',
            ],
            [
                'category_name' => 'Welding Equipment',
                'category_slug' => 'welding-equipment',
                'category_description' => 'Tools and machines used for joining metals in construction and fabrication projects.',
            ],
            [
                'category_name' => 'Aerial Work Platforms',
                'category_slug' => 'aerial-work-platforms',
                'category_description' => 'Elevated work platforms like cherry pickers and scissor lifts used for working at height.',
            ],
            [
                'category_name' => 'Generators',
                'category_slug' => 'generators',
                'category_description' => 'Portable or stationary power generation equipment for providing electricity at construction sites.',
            ]
        ];
    
        // Iterate over each category and create it in the database
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
