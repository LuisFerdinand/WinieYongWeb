<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => 'Sunward SW240P',
                'description' => 'The Sunward SW240P is a powerful compact excavator designed for optimal performance in tight spaces.',
                'image_url' => 'https://example.com/images/sw240p.jpg',
                'stock' => 10,
                'price' => 65000.00,
                'model_number' => 'SW240P',
                'power_output' => 30.5,
                'dimensions' => '2250 x 1200 x 2500 mm',
                'fuel_type' => 'Diesel',
                'usage_instructions' => 'Ensure all safety protocols are followed during operation.',
                'rating' => 4.5,
                'reviews_count' => 20,
            ],
            [
                'name' => 'Sunward SWD25D',
                'description' => 'A versatile wheel loader known for its efficient operation and robust design.',
                'image_url' => 'https://example.com/images/swd25d.jpg',
                'stock' => 15,
                'price' => 85000.00,
                'model_number' => 'SWD25D',
                'power_output' => 40.0,
                'dimensions' => '3600 x 1800 x 2400 mm',
                'fuel_type' => 'Diesel',
                'usage_instructions' => 'Check hydraulic oil levels before operation.',
                'rating' => 4.7,
                'reviews_count' => 35,
            ],
            [
                'name' => 'Sunward SWF75',
                'description' => 'A heavy-duty crawler excavator with enhanced digging capabilities.',
                'image_url' => 'https://example.com/images/swf75.jpg',
                'stock' => 8,
                'price' => 125000.00,
                'model_number' => 'SWF75',
                'power_output' => 70.0,
                'dimensions' => '4000 x 2000 x 3000 mm',
                'fuel_type' => 'Diesel',
                'usage_instructions' => 'Always check for overhead power lines before operation.',
                'rating' => 4.8,
                'reviews_count' => 40,
            ],
            [
                'name' => 'Sunward SWM500',
                'description' => 'A powerful mini excavator designed for high-efficiency operation in construction sites.',
                'image_url' => 'https://example.com/images/swm500.jpg',
                'stock' => 5,
                'price' => 55000.00,
                'model_number' => 'SWM500',
                'power_output' => 22.0,
                'dimensions' => '1600 x 800 x 1800 mm',
                'fuel_type' => 'Gasoline',
                'usage_instructions' => 'Avoid operating on steep slopes.',
                'rating' => 4.3,
                'reviews_count' => 15,
            ],
            [
                'name' => 'Sunward SWD35',
                'description' => 'A robust backhoe loader suitable for various construction and landscaping tasks.',
                'image_url' => 'https://example.com/images/swd35.jpg',
                'stock' => 12,
                'price' => 95000.00,
                'model_number' => 'SWD35',
                'power_output' => 50.0,
                'dimensions' => '3000 x 1500 x 2300 mm',
                'fuel_type' => 'Diesel',
                'usage_instructions' => 'Perform regular maintenance checks to ensure optimal performance.',
                'rating' => 4.6,
                'reviews_count' => 30,
            ],
        ];

        // Insert the products into the database
        DB::table('products')->insert($products);
    }
}
