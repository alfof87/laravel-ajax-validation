<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    public function getAllPost(){
      $posts = Post::all();
      return response() -> json($posts);
    }
    public function getBestPost(){
      $psots = Post::where('like', '>', 100000);
      return response() -> json($posts);
    }
}
