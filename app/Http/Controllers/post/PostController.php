<?php

namespace App\Http\Controllers\post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware(['auth'])->only('store','destroy');
    }
    public function index(){
        $posts = Post::latest()->with('user','likes')->paginate(20);
        return view('post.index',[
            'posts' => $posts
        ]);
    }

    public function post(Request $request){
        $this->validate($request,[
            'body' => 'required'
        ]);
        $request->user()->posts()->create($request->only('body'));
        return back();
    }
    public function destroy(Post $post,Request $request){
        $this->authorize('delete',$post);
        $post->delete();
        return back();
    }
    public function show(Post $post){
        return view('post.single',[
            'post' => $post
        ]);
    }
}
