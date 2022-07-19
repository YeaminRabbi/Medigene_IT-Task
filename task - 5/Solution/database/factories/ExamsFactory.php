<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Exams;
use App\Models\Courses;


class ExamsFactory extends Factory
{
  
    

    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['MCQ', 'Written', 'Viva']),
            'question' => $this->faker->sentence
        ];
    }
}
