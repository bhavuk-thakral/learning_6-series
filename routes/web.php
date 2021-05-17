<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     $name=request('name');
//     return $name;
//     return view('test',[
//     'name'=> $name
//     ]);

//      Route::get('/posts/{post}', function ($post) {

//          $posts=[
//              "my-first-post"=>"hello i m here for you ",
//              "my-second-post"=>"hello i m your collegue "

//          ];
//          return view('post',[
//              'post'=>$posts[$post]
//          ]);
 

// });

Route::get('/posts/{post}','PostsController@show');


