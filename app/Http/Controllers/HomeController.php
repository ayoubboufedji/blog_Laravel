<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){

        $posts = \App\Post::where('user_id','>' ,1)->get() ; //get all posts

        return view('welcome',array(
            'posts' => $posts));
    }

    public function show($post_name) {
        $posts = \App\Post::where('post_name',$post_name)->first(); //get first post with post_name == $post_name

        return view('Articles_single',array( //Pass the post to the view
            'post' => $posts
        ));
     }

}
