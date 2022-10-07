<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'tags' => 'Lorem, ipsum, dolor, sit, amet',
            'author' => $this->faker->name(),
            'reviewer' => $this->faker->name(),
            'media_type' => $this->faker->word(),
            'genre' => $this->faker->word(),
            'summary' => $this->faker->paragraph(5),
            'description' => $this->faker->paragraph(5)
        ];
    }
}
