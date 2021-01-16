<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;


class PageController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('pages.index',[
            'posts'=>$posts,
        ]);
    }

    public function category($slug)
    {
      $category = Category::where('slug', $slug)->with('posts')->first();
      return view('pages.category', ['category' => $category]);
    }
  
  
    public function singlePost($slug)
    {
      $post = Post::where('slug', $slug)->first();
  
      return view('pages.single-post', ['post' => $post]);
    }
}
