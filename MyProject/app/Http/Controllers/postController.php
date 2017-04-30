<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;
class postController extends Controller
{
    public function index(){
        $posts = Post::latest("created_at")->get();
       
        return view("posts.index",["posts"=>$posts]);
        
    }
    
    public function show($id){
        $post = Post::findOrFail($id);
        return view("posts.show")->with('post',$post);
        
    }
}
