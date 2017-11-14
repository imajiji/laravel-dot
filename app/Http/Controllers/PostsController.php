<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Image;

use App\Http\Requests\PostRequest;
// unko
class PostsController extends Controller
{
    public function index() {
        $posts = Post::join('images', 'posts.id', '=', 'images.post_id')->latest('posts.created_at')->get();
        // dd($posts);
        return view('posts.index')->with('posts', $posts);
    }

    public function show($id) {
        $post = Post::findOrFail($id);
        return view('posts.show')->with('post', $post);
    }

    public function edit($id) {
        $post = Post::findOrFail($id);
        return view('posts.edit')->with('post', $post);
    }

    public function create() {
        return view('posts.create');
    }

    public function store(PostRequest $request) {

        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->link_url = $request->link_url;
        $post->save();

        // $path = $request->file('image')->store('public/products');

        $image = new Image();
        $now = date("Y-m-d H:i:s");
        for ($i=1; $i <= 4; $i++) {
            if (!empty($request->{"img_url".$i})) {
                $datum[] = [
                    'post_id' => $post->id,
                    'path' => $request->{"img_url".$i},
                    'sort' => $i,
                    'created_at' => $now,
                    'updated_at' => $now
                ];
            }
        }
        $return = $image->insert($datum);

        return redirect('/')->with('flash_message', 'Post Added!');
    }

    public function update(PostRequest $request, $id) {
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->link_url = $request->link_url;
        $post->save();
        return redirect('/')->with('flash_message', 'Post Updated!');
    }

    public function destroy($id) {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/')->with('flash_message', 'Post Deleted!');
    }

}
