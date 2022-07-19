<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Exams;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Exams::factory()->count(100)->create();
    }
}
