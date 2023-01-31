<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => ['ar' => $this->faker->name, 'en' => $this->faker->name],
            'notes' => ['ar' => $this->faker->paragraph(), 'en' => $this->faker->paragraph()],
            'status' => true,
            'url' => $this->faker->url,
            'price' => "12000",
        ];
    }
}
