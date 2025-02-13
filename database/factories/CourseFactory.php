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
            'user_id' => \App\Models\User::inRandomOrder()->first()->id, 
        ];
    }
}
