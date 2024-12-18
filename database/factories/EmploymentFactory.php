<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EmploymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employment' => $this->faker->jobTitle(),
            'state' => $this->faker->boolean($chanceOfGettingTrue = 50),
            'company'=> $this->faker->company(),
            'country'=> $this->faker->country($maxnbchars = 20),
            'contact' => $this->faker->phoneNumber(),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
