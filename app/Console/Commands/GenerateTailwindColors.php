<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Brand;
use Illuminate\Support\Str; // Import Str class

class GenerateTailwindColors extends Command
{
    protected $signature = 'generate:tailwind-colors';
    protected $description = 'Generate color classes for Tailwind from Brand model';

    public function handle()
    {
        // Fetch all brands and their colors
        $brands = Brand::all();
        
        // Prepare the color data in JSON format
        $colors = $brands->map(function ($brand) {
            return [
                'name' => Str::slug($brand->name), // Use Str::slug() to generate the slug
                'tx_color' => $brand->brand_tx_color, // Text color
                'bg_color' => $brand->brand_bg_color, // Background color
            ];
        });

        // Write the JSON file to the project directory
        file_put_contents(base_path('tailwind-colors.json'), json_encode($colors, JSON_PRETTY_PRINT));

        $this->info('Tailwind colors generated successfully!');
    }
}
