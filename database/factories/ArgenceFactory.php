<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Argence>
 */
class ArgenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

                'nom' => $this->faker->company,
                'ville' => $this->faker->city,
                'telephone' => $this->faker->phoneNumber,

        ];
    }
}
