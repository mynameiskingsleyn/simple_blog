<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    //
    public function getIndex(){
      $posts = Post::OrderBy('id','desc')->paginate(4);
      return view('blog.index')->withPosts($posts);
    }
    public function getSingle($slug){
      // fetch from database.
        $post = Post::where('slug', '=', $slug)->first();
      // return view..
        if($post){
          return view('blog.single')->withPost($post);
        }
        else{
          return view('errors.404');
        }
    }

}
