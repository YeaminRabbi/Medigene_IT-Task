<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Videos;
class VideoSeeder extends Seeder
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
            $video = new Videos();
            $video->source = "http://my.site/videos/" . Str::random(12);
            $video->save();
        }
    }
}
