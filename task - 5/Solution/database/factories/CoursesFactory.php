<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Courses;

class CoursesFactory extends Factory
{
   
    protected $model = Courses::class;

    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'details' => $this->faker->paragraph(100),
        ];
    }
}
