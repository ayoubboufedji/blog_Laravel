<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Contracts\Session\Session;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct()
    {
        $this->middleware('auth');
    } */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    function welcome(){

        $posts = Post::orderBy('created_at', 'desc')->limit('3')->get() ; //get all posts

        return view('welcome',array(
            'posts' => $posts));
    }


}
