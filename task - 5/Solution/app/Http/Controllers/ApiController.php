<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Course;
use App\Models\Exam;
use App\Models\Paragraph;
use App\Models\Video;
use App\Models\User;
use App\Models\Schedule;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Review;

use Auth;
use Laravel\Ui\Presets\React;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Faker\Generator;
use Faker\Factory as Faker;
class ApiController extends Controller
{
   function getSchedule()
   {
        return Content::all();
   }

   function getVideo()
   {
        return response([
            'data' => Video::all() 
        ]);
   }

   function getParagraph()
   {
        return response([
            'data' => Paragraph::all() 
        ]);
   }

   function getExam()
   {
        return response([
            'data' => Exam::all() 
        ]);
   }

   function getContent()
   {
     return response([
          'data' => Content::all()
     ]);
   }


   function test()
   {
      
     $collection = Content::query()
          ->where("contentable_type", Exam::class)
          ->with('contentable')
          ->get();
   

     return response([
          'data'=> $collection
     ]);

   }

   function cc()
   {

     // $post = new Post();
     // $post->title = " 2 example Post";
     // $post->save();
     // $post->comments()->create([
     //      'body' => '2 This is my first comment test' 
     // ]);

     
     // $review = new Review();
     // $review->title = "3 tipical review";
     // $review->save();
     
     // $review->comments()->create([
     //      'body' => '3 This comment is for review' 
     // ]);


     $faker = Faker::create();
     for($i=1;$i<50;$i++)
     {
          // $CreatedObj = new Exam();
          // $CreatedObj->type = $faker->randomElement(['MCQ', 'Written', 'Viva']);
          // $CreatedObj->title = Str::ra;
          // $CreatedObj->save();
          
          // $CreatedObj->contents()->create([
          //      'body' => 'Paragraph' 
          // ]);

          $schedule = new Schedule();
          $schedule->content_id = Content::all()->random()->id;
          $schedule->course_id = Course::all()->random()->id;
          $schedule->datetime = $faker->dateTimeBetween('now', '+30 days');
          $schedule->save();
        
     }
     


     return response([
          'msg' => "success"
     ]);


   }

   function course_list()
   {
    
     return response([
          'course_list' => Course::all()
     ]);

   }

   function schedule_list()
   {
     $schedule = Schedule::all();
     $collection = [];
     foreach($schedule as $item)
     {    
          $data= [
               "datetime" => $item->datetime,
               "course"=>$item->get_course($item->course_id) , 
               "content"=> $item->get_content($item->content_id)
          ];

          array_push($collection, $data);
        
     }
     return response([
         "data" => $collection
     ]);

   }

   function exam_list()
   {
      return response([
          'data'=> Exam::all()
      ]);
   }

}


