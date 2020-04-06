<?php


namespace App\Http\Controllers;
use App\Post;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    function index(){

        $posts = Post::orderBy('created_at', 'desc')->limit('3')->get() ; //get all posts

        return view('welcome',array(
            'posts' => $posts));
    }

}
