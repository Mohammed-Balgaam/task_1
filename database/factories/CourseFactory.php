<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'name' => $this->faker->word(),
            'duration' => $this->faker->numberBetween(10, 100), 
            'field' => $this->faker->word(), 
            'price' => $this->faker->numberBetween(10, 10000),
            'desc' => $this->faker->paragraph(),
            'image_url' => 'coursesImages/' . $this->faker->image('storage/app/public/coursesImages', 640, 480, 'courses', false),
            'user_id' => \App\Models\User::inRandomOrder()->first()->id, 
        ];
    }
}
