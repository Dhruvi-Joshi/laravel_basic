<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/demo/{name}/{id?}',function($name,$id=null){
//     // return view('demo');
//     // echo $name." ";
//     // echo $id;
//     $data=compact('name','id');
//     return view('demo')->with($data);
// }); 

// Route::any('/test',function(){
//     echo "Testing the route";
// });

//post method directly not open with url it's show error
// Route::post('/test',function(){
//     echo "Testing the route";
// });

// Route::get('/{name?}', function ($name=null) {
//     $demo="<h1>Dhruvi</h1>";
//     $data=compact('name','demo');
//     return view('home1')->with($data);
// });

// Route::get('/',function(){
//     return view('home');
// });

// Route::get('/about',function(){
//     return view('about');
// });

Route::get('/',[DemoController::class,'index']);
Route::get('/about','App\Http\Controllers\DemoController@about');
// Route::get('/about','DemoController::about');  
Route::get('course',SingleActionController::class);
Route::resource('photo',PhotoController::class);


Route::get('register',[RegistrationController::class,'index']);
Route::post('/register',[RegistrationController::class,'register']);