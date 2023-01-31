<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SettingSiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'status' => true,
            'phone' => $this->faker->name,
            'email' => $this->faker->name,
            'notes' => $this->faker->name,
            'address' => $this->faker->name,
            'facebook' => $this->faker->url,
            'twitter' => $this->faker->url,
            'instagram' => $this->faker->url,
            'YouTube' => $this->faker->url,
            'Fax' => $this->faker->url,
            'url' => $this->faker->url,
        ];
    }
}
