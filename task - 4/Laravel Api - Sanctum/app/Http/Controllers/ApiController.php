<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Books;


use Validator;
use Illuminate\Support\Facades\Auth;
use Hash;
class ApiController extends Controller
{
    function register(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();

            $rules = [
                'name' => 'required',
                'email' =>'required|email|unique:users',
                'password' =>'required',
            ];
            $customMessage = [
                'name.required' => 'name is required',
                'email.required' => 'Email is required',
                'email.email' => 'Valid email is required',
                'password.required' => 'Password is required',
            ];
            $validator = Validator::make($data,$rules,$customMessage);
            if($validator->fails()){
                return response()->json($validator->errors(),422);
            }

            $registerUser = new User();
            $registerUser->name = $data['name'];
            $registerUser->email = $data['email'];
            $registerUser->password = Hash::make($data['password']);
            $registerUser->save();

            $user = User::find($registerUser->id);
            $message = 'User Successfully Registerd';
            return response()->json([
                'message'=>$message,
                'registered_user'=> $user            
            ],201);                       
        }
    }

    function login(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();           
            
            $rules = [
                'email' =>'required|email|exists:users',
                'password' =>'required',
    		];
    		$customMessage = [
    			'email.required' => 'Email is required',
    			'email.email' => 'Valid email is required',
    			'email.exists' => 'Email does not exists',
    			'password.required' => 'Password is required',
    		];
    		$validator = Validator::make($data,$rules,$customMessage);
            if($validator->fails()){
                return response()->json($validator->errors(),422);
            }
          
            $user= User::where('email', $request->email)->first();
        
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }
            
            $token = $user->createToken('my-app-token')->plainTextToken;
            return response([
                'message' => 'Login Successfull',
                'token' => $token
                ], 201);
       
        }
    }


    function createBook(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();           
            
            $rules = [
                'title' =>'required',
                'content' =>'required',
    		];
    		$customMessage = [
    			'title.required' => 'Title is required',
    			'content.email' => 'Content is required'
    		];

    		$validator = Validator::make($data,$rules,$customMessage);
            if($validator->fails()){
                return response()->json($validator->errors(),422);
            }
            
            

            $book = new Books();
            $book->title = $data['title'];
            $book->content = $data['content'];
            $book->user_id = Auth::id();          
            $book->save();

            $book = Books::find($book->id);
            $message = 'Book Successfully Created';
            return response()->json([
                'message'=>$message,
                'created_book'=> $book            
            ],201);     
       

           
       
        }
    }


}
