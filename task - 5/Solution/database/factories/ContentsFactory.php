<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use App\Models\Contents;
class ContentsFactory extends Factory
{
    protected $model = Contents::class;
    
    public function definition()
    {
        
        return [
            'contentable_type' =>$this->faker->randomElement(['App\Exam', 'App\Video', 'App\Paragraph']),
            'contentable_id' => rand(1,20)
        ];
    }
}
