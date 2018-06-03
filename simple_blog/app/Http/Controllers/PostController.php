<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all the Posts and store it in $post
        $posts = Post::OrderBy('id','desc')->paginate(3);
        // return a view and pass $post
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        // validate the data
        $this->validate($request,[
            'title' => 'required|max:60|min:5',
            'slug' => 'required|min:5|max:60|alpha_dash|unique:posts,slug',
            'body' => 'required|min:10'

        ]);
        // store in the database..
        $post = new Post;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $saved = $post->save();
        // redirect..
        if($saved){
          Session::flash('success','The blog post has been saved');
        }

        return redirect()->route('posts.show',$post->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::findOrFail($id);
        //return view('posts.show')->with(['post'=>$post]);
        return view('posts.show')->withPost($post);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get the post being edited.
        $post = Post::findOrFail($id);
        // pass this post to the view..
        return view('posts.edit')->withPost($post);
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
       $post = Post::findOrFail($id);
        //validate data
        if($request->slug == $post->slug){
          $this->validate($request,[
            'title' => 'required|max:60|min:5',
            'body' => 'required|min:10',

          ]);
        }else{
          $this->validate($request,[
            'title' => 'required|max:60|min:5',
            'body' => 'required|min:10',
            'slug' => 'required|min:5|max:60|alpha_dash|unique:posts,slug',
          ]);
        }

        // save data to the database

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->save();
        // set flash data with success message.
        Session::flash("success","Item Updated successfully");
        // redirect to posts.show
        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // get the post to be deleted..
        $post = Post::findOrFail($id);
        $post->delete();
        Session::flash('success','Post has been deleted');
        return redirect()->route('posts.index');

    }
}
