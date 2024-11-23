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
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement(['$35,000 USD', '$50,500 USD', '$87,000 USD']),
            'location' => 'Remote',
            'schedule' => 'Full-time',
            'url' => fake()->url(),
            'featured' => false,
            'employer_id' => Employer::factory(),
        ];
    }
}