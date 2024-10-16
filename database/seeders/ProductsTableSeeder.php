<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Sunward Excavator SWL2830',
                'slug' => Str::slug('Sunward Excavator SWL2830'),  // Slug generated from name
                'description' => 'High-performance Sunward excavator, suitable for construction and heavy-duty digging.',
                'image_url' => 'images/excavator_swl2830.jpg',
                'model_number' => 'SWL2830',
                'power_output' => 350.00,  // Example value in kW
                'dimensions' => '800x300x300 cm',
                'fuel_type' => 'Diesel',
                'usage_instructions' => 'Ensure regular maintenance for optimal performance.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sunward Hydraulic Hammer SWH500',
                'slug' => Str::slug('Sunward Hydraulic Hammer SWH500'),
                'description' => 'Hydraulic hammer attachment, ideal for breaking rocks and concrete.',
                'image_url' => 'images/hydraulic_hammer_swh500.jpg',
                'model_number' => 'SWH500',
                'power_output' => 120.00,  // Example value in kW
                'dimensions' => '250x70x50 cm',
                'fuel_type' => 'Hydraulic',
                'usage_instructions' => 'Only use with compatible Sunward excavators.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sunward Mini Excavator SWE18UF',
                'slug' => Str::slug('Sunward Mini Excavator SWE18UF'),
                'description' => 'Compact excavator for small construction sites or landscaping projects.',
                'image_url' => 'images/mini_excavator_swe18uf.jpg',
                'model_number' => 'SWE18UF',
                'power_output' => 50.00,  // Example value in kW
                'dimensions' => '220x120x150 cm',
                'fuel_type' => 'Diesel',
                'usage_instructions' => 'Ideal for tight spaces and light digging work.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
