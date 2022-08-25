<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LibraryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'game_id' => mt_rand(1,15),
            'user_id' => mt_rand(1,20)
        ];
    }
}
