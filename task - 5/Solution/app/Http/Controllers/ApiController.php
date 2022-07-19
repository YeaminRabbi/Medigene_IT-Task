<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contents;
use App\Models\Courses;
use App\Models\Exams;
use App\Models\Paragraphs;
use App\Models\Videos;
use App\Models\User;

use Auth;





class ApiController extends Controller
{
   function getSchedule()
   {
        return Contents::all();
   }

   function getVideo()
   {
        return response([
            'data' => Videos::all() 
        ]);
   }

   function getParagraph()
   {
        return response([
            'data' => Paragraphs::all() 
        ]);
   }

   function getExam()
   {
        return response([
            'data' => Exams::all() 
        ]);
   }

   function getContent()
   {

     // $video = new Videos();
     // $video->source = 'asdfasdfasdfasdf';
     // $video->save();

     // $video->content()->create();

     // return response([
     //      "msg" => "Success!"
     // ]);

     return response([
          'data' => Contents::get()
     ]);
   }
}
