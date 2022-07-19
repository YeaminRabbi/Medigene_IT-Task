<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Courses;
class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Courses::factory()->count(20)->create();
    }
}
