<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function __invoke()
    {
     return ("c'est la méthode par defaut");
    }
   public function index()
   {
    $posts=Post::get();
    return view("posts.index", compact('posts'));
   }
public function show(Post $post)
{
    //traitement de $post
    return view("posts.show", compact('post'));
}
  
public function create()
{
return view("posts.create");
}

public function store(Request $request)
{

//traitement d'ajout
    $validatedData = $request->validate([
        'title'=> 'required|max:255',
        'content'=>'required',
    ]);

    $post = new Post;
    $post->title=$validatedData['title'];
    $post->content=$validatedData['content'];
    $post->user_id = rand(1,10);
    $post->save();
    return redirect("/posts");
}

}
