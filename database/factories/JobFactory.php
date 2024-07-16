<?php

namespace Database\Factories;

use App\Models\Employer;
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
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement(['20,000 PHP', '25,000 PHP', '45,000 PHP', '50,000 PHP','75,000 PHP', '100,000 PHP']),
            'location' => fake()->country(),
            'schedule' => fake()->randomElement(['Full Time', 'Part Time']),
            'url' => fake()->url(),
            'featured' => fake()->boolean(),
        ];
    }
}