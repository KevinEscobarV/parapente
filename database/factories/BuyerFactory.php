<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buyer>
 */
class BuyerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'names' => $this->faker->name(),
            'surnames' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'birthday' => $this->faker->date(),
            'document_type' => $this->faker->randomElement(\App\Enums\DocumentType::cases()),
            'document_number' => $this->faker->unique()->numberBetween(1, 999999),
            'civil_status' => $this->faker->randomElement(\App\Enums\CivilStatus::cases()),
            'phone_one' => $this->faker->phoneNumber(),
            'phone_two' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
        ];
    }
}
