<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index() {
        // $posts = Post::all();
        $posts = Post::latest()->get();
        // dd($posts->toArray());
        return view('posts.index');
    }
}
