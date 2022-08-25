<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'price' => mt_rand(30,200),
            'thumbnail' => $this->faker->word() . '.jpg',
            'slug' => $this->faker->slug(2),
            'description' => $this->faker->paragraph(5),
            'excerpt' => $this->faker->paragraph(1),
            'genre_id' => mt_rand(1,5),
            'platform_id' => mt_rand(1,3)
        ];
    }
}
