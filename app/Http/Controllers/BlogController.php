<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
public function getIndex () {
$posts = Post::paginate(10);

return view('Blog.getIndex')->withPosts('$posts');

}
}
