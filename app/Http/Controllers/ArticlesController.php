<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {    // create a variable and store all the blog posts in it from the data base

        $posts = Post::orderBy('created_at', 'desc')->paginate(10); //get all posts

    return view('Articles',array(
        'post' => $posts));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate data
        $this->validate($request, array(
           'post_author' => 'required|min:3',
          // 'slug' => 'required|min:3|max:255|alpha_dash',
           'post_title' => 'required|max:255',
           'post_content' => 'required'
        ));

        //store in the database
       $post = new Post;
       $post->post_name = $request->post_name;
       $post->post_type = $request->post_type;
       $post->post_category = $request->post_category;
       $post->post_status = $request->post_status;
       $post->post_date = now();
       $post->post_author = $request->post_author;
       $post->post_title = $request->post_title;
       //$post->slug = $request->slug;
       $post->post_content = $request->post_content;

       $post->save();

          //redirect
     // Session::put('success','Thi Blog post was successfuly save!');
      return redirect()->route('Articles.show', $post->id)->with('success','The Blog post was successfuly saved!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $posts = Post::find($id); //get first post with post_name == $post_name

          //  $posts = \App\Post::where('post_name',$post_name)->first(); //get first post with post_name == $post_name

                return view('posts.show',array( //Pass the post to the view
                    'post' => $posts
                ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find the post  in the data base and save it as a var
        $posts = Post::find($id); //get first post with post_name == $post_name

        // retuen the view and passe in the var we previously created
        return view('posts.edit',array( //Pass the post to the view
            'post' => $posts
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validate the data
        $this->validate($request, array(
           // 'post_author' => 'required|min:3',
            'post_title' => 'required|max:255',
            //'post_content' => 'required',
            //'post_author' => 'required|min:3',
          // 'slug' => 'required|min:3|max:255|alpha_dash|unique:post,slug'

         ));

        // save  the data to the database
        $post = Post::find($id); //get first post with post_name == $post_name

        $post->post_title = $request->input('post_title');
        $post->post_name = $request->input('post_name');
        $post->post_content = $request->input('post_content');
        //$post->slug = $request->input('slug');
        $post->post_type = $request->input('post_type');
        $post->post_category = $request->input('post_category');
        $post->post_status = $request->input('post_status');
        $post->post_date = now();
        $post->post_author = $request->input('post_author');

        $post->save();
        return redirect()->route('Articles.show', $post->id)->with('success','This post was succesfully saved!');

        // set flash data with succes message

        //redirect with flach data
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $post = Post::find($id); //get first post with post_name == $post_name
        $post -> delete();
        return redirect()->route('Articles.index')->with('success','The post was succesfully deleted!');

    }

}
