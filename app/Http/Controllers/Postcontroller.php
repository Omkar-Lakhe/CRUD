<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class Postcontroller extends Controller
{
    public function addPost()
    {
        return view('create-post');
    
    }
    public function createPost(Request $request)
    {
        $post = new Posts();
        $post->post_title =$request->post_title;
        $post->post_date =$request->post_date;
        $post->post_description =$request->post_description;
        $post->post_image =$request->post_image;
        $post->save() ;
        return back()->with('post_created','post has been created successfully!');
    }

    public function getPost()
    {
        $posts = Posts::orderBy('id','DESC')->get();
        return view('posts',compact('posts'));
    }
   
}

