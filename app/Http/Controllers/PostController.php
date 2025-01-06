<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getAllPosts(){
        $posts = Post::all();
        return $posts;
    }
    public function create(Request $request){
        $post = Post::create($request->all());
        return "post created";
    }
    public function update(Request $request, $id){
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return"post updated";
    }
    public function delete($request, $id){
        $post = Post::findOrFail($id);
        $post->delete();
        return "post deleted";
    }
    public function show($id){
        $post = Post::findOrFail($id);
        return $post;
    }

}
