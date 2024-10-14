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
                'category_image' => 'https://s7d2.scene7.com/is/image/Caterpillar/CM20130721-78722-62413',
            ],
            [
                'category_name' => 'Bulldozers',
                'category_slug' => 'bulldozers',
                'category_description' => 'Powerful construction vehicles for pushing large amounts of materials.',
                'category_image' => 'https://s7d2.scene7.com/is/image/Caterpillar/CM20170530-47239-53877',
            ],
            [
                'category_name' => 'Hydraulic Mining Shovels',
                'category_slug' => 'hydraulic-ining-hovels',
                'category_description' => 'Heavy-duty equipment used for digging and loading earth or fragmented rock in mining operations.',
                'category_image' => 'https://s7d2.scene7.com/is/image/Caterpillar/C833220',
            ],
            [
                'category_name' => 'Motor Graders',
                'category_slug' => 'motor-graders',
                'category_description' => 'Equipment used for grading and leveling earthworks for road construction, maintenance, and snow removal.',
                'category_image' => 'https://s7d2.scene7.com/is/image/Caterpillar/CM20210419-a2c40-180b5',
            ],
            [
                'category_name' => 'Compactors',
                'category_slug' => 'compactors',
                'category_description' => 'Machines designed to compact soil, gravel, or asphalt in construction work, ensuring solid foundations.',
                'category_image' => 'https://s7d2.scene7.com/is/image/Caterpillar/CM20201215-90df8-498ab',
            ],
            [
                'category_name' => 'Wheel Loaders',
                'category_slug' => 'wheel-loaders',
                'category_description' => 'Versatile construction machines used for moving, loading, or transporting materials like gravel, sand, or soil.',
                'category_image' => 'https://s7d2.scene7.com/is/image/Caterpillar/C842352',
            ],
        ];
    
        // Iterate over each category and create it in the database
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
