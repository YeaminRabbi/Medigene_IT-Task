<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contents;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contents::factory()->count(10)->create();
    }
}
