<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Schedule;
use App\Models\Courses;
use App\Models\Contents;
class ScheduleFactory extends Factory
{
    
    protected $model = Schedule::class;
    public function definition()
    {
        return [
            'course_id' => Courses::pluck('id')->random(),
            'content_id' => Contents::pluck('id')->random(),
            'datetime' => $this->faker->dateTimeBetween('now', '+02 days')

        ];
    }
}
