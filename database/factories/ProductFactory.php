<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word() . ' ' . $this->faker->randomElement(['Excavator', 'Bulldozer', 'Crane', 'Loader']),
            'description' => $this->faker->sentence(15),
            'image_url' => $this->faker->imageUrl(640, 480, 'machines', true), // You can use a placeholder URL or real images
            'stock' => $this->faker->numberBetween(1, 100),
            'price' => $this->faker->randomFloat(2, 50000, 500000), // Random price between 50k and 500k
            'category' => $this->faker->randomElement(['excavator', 'bulldozer', 'crane', 'loader']),
            'model_number' => strtoupper($this->faker->bothify('SW###??')),
            'specifications' => 'Engine: ' . $this->faker->numberBetween(100, 400) . ' HP, Weight: ' . $this->faker->numberBetween(10000, 50000) . ' kg',
        ];
    }
}
