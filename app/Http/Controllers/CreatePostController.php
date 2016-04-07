<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;

class CreatePostController extends Controller
{
    public function show()
    {
        $posts = Post::all();

//          $posts = array("test","test2");
        return response()->success(compact('posts'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required',
            'topic' => 'required',
        ]);

        $post = new Post;
        $post->name = $request->input('name');
        $post->topic = $request->input('topic');
        $post->save();

        return response()->success(compact('post'));
    }

    public function delete(Request $request)
    {
        $post = Post::find($request->input('id'));
        $post->delete();
//        $req = array();
//        $req['name'] = $request->input('name');
//        $req['id'] = $request->input('id');
        return response()->success(compact('post'));
    }


}
