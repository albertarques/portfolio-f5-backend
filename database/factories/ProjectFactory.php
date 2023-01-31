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
            'title' => fake()->text($maxNbChars = 150),
            'picture_cover' => fake()->image(),
            'picture_1' => fake()->image(),
            'picture_2' => fake()->image(),
            'picture_3' => fake()->image(),
            'description' => fake()->text($maxNbChars = 300),
        ];
    }
}
