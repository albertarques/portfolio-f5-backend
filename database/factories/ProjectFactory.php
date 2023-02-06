<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->text($maxNbChars = 25),
            'picture_cover' => fake()->imageUrl($width = 450, $height = 600),
            'picture_1' => fake()->imageUrl($width = 450, $height = 600),
            'picture_2' => fake()->imageUrl(),
            'picture_3' => fake()->imageUrl(),
            'description' => fake()->text($maxNbChars = 250),
        ];
    }
}
