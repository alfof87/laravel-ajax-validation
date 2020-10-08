<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class ControllerApiController extends Controller
{
    public function getAllPost(){
      $posts = Post::all();
      return response() -> json([$posts]);
    }
}
