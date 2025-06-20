<?php

namespace Database\Factories;

use App\Models\Employer;
use Hamcrest\Core\HasToString;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'salary' => '$ ' . number_format(fake()->numberBetween(30000, 120000)),
            'location' => fake()->city() . ', ' . fake()->stateAbbr(),
            'description' => fake()->paragraph(),
            'employer_id' => Employer::factory(),

        ];
    }
}
