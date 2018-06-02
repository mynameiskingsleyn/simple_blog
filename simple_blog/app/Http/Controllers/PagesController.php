<?php
namespace App\Http\Controllers;
use App\Post;
class PagesController extends Controller
{
  // about page action

  public function getAbout(){
    $name = "Kingsley N";

    return view('pages.about')->withName($name);
  }
  // contact page action
  public function getContact(){
    $data = array(
      'name' => 'Kingsley N',
      'email' => 'kingkom001@yahoo.com',
      'phone' => '702-472-1616'
    );
    return view('pages.contact')->withData($data);
  }
  // index action
  public function getIndex(){
    $posts = Post::orderBy('updated_at','desc')->limit(4)->get();
    return view('pages.welcome')->withPosts($posts);
  }

}




 ?>
