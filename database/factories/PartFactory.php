<?php

namespace Database\Factories;

use App\Models\Part;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartFactory extends Factory
{
    protected $model = Part::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 10000, 5000000),
            'image_url' => $this->faker->imageUrl(640, 480, 'parts', true),
            'category' => $this->faker->randomElement(['engine', 'body', 'interior']),
            'contact' => $this->faker->phoneNumber,
            'location' => $this->faker->address,
        ];
    }
}
