<?php

use App\Http\Controllers\Postcontroller;
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



Route::get('/', function () {
    return view('welcome');
});

//Route::get('/Create-post',[Postcontroller::class,'createPost']);

//update post
  Route::get('/update_post',function(){
    return view('update-post');
 })->name('update-post-route');



// cerate post
Route::get('/create_post',function(){
  return view('create-post');
})->name('create-post-route'); 



//read post
Route::get('/read_post',function(){
  return view('read-post');
})->name('read-post-route');

//Route::post('/add-post',[Postcontroller::class,'addPost'])->name('post.add');

Route::get('/posts',function(){
  return view('posts');
})->name('posts');


Route::get('/create-post',[Postcontroller::class,'addpost']);

Route::post('/create-post',[Postcontroller::class, 'createpost'])->name('post.create');

Route::get('/posts',[Postcontroller::class,'getPost']);
 