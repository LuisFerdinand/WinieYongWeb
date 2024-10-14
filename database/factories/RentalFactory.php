<?php

namespace Database\Factories;

use App\Models\Rental;
use Illuminate\Database\Eloquent\Factories\Factory;

class RentalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rental::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(3, true), // Fake name for the rental property
            'description' => $this->faker->paragraph, // Fake description
            'price' => $this->faker->numberBetween(500000, 5000000), // Fake price in Rupiah
            'image_url' => $this->faker->imageUrl(640, 480, 'house', true), // Fake image URL
            'category' => $this->faker->randomElement(['apartment', 'house', 'condo']), // Random category
            'availability_status' => $this->faker->boolean, // Random availability status
            'available_from' => $this->faker->dateTimeBetween('now', '+1 month'), // Available from current date to next month
            'available_to' => $this->faker->dateTimeBetween('+1 month', '+6 months'), // Available until 6 months from now
            'stock' => $this->faker->numberBetween(0, 100),
            'product_location' => $this->faker->city,
        ];
    }
}
