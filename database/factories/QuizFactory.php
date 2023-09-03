<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class QuizFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'updated_at'=>now(),
            'created_at'=>now(),
            'title' => $this->faker->sentence(),
            'course' => $this->faker->word(),
            'questions' => $this->faker->numberBetween(1, 10), // Assuming you want an integer between 1 and 10
            // 'duration' => $this->faker->time('H:i:s', '00:30:00'), // Assuming you want a duration within 30 minutes
            'status' => $this->faker->randomElement(['active', 'inactive', 'pending']), // Assuming you want one of these statuses
            'action' => $this->faker->randomElement(['Edit', 'Delete', 'copy']), // Assuming you want one of these actions
            'available' => now(),
                        
        ];
    }
}
