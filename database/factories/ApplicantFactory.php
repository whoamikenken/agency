<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\applicant>
 */
class ApplicantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $firstName = fake()->firstName();
        return [
            'applicant_id' => fake()->randomNumber(6, false),
            'fname' => $firstName,
            'lname' => fake()->lastName(),
            'mname' => fake()->lastName(),
            'contact' => fake()->e164PhoneNumber(),
            'branch' => fake()->randomElement(['001', '002', '005', '004']),
            'sales_manager' => fake()->randomElement(['1', '2', '5', '4']),
            'jobsite' => fake()->randomElement(['MY', 'PH'])
        ];
    }
}
