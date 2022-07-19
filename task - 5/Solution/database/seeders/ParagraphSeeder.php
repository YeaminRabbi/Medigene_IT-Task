<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

use App\Models\Paragraphs;
class ParagraphSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0 ; $i<100 ;$i++)
        {
            $para = new Paragraphs();
            $para->content = Str::random(40);
            $para->save();
        }
    }
}
