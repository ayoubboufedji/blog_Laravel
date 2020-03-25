<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    function index () {
    $posts = \App\Post::all(); //get all posts

    return view('Articles',array(
        'post' => $posts));

    }

    public function show($post_name) {
        $posts = \App\Post::where('post_name',$post_name)->first(); //get first post with post_name == $post_name

        return view('Articles_single',array( //Pass the post to the view
            'post' => $posts
        ));
     }





}
