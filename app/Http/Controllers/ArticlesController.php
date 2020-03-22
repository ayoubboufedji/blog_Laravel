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
}
