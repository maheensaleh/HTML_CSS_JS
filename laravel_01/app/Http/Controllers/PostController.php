<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo("storing !");

        $posts = Post::all();
        $data = array(
            'title'=>"Posts",
            'posts'=>$posts
        );
        // return $posts;
        return view("posts.index")->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return "form for creatoing a post";

        return view("posts.create")->with("title","Add Post");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //     //
    //     echo("storing");
       $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            'author'=>'required',

        ]);

        $post = new Post;
        $post->title= $request->input("title");
        $post->body= $request->input("body");
        $post->author= $request->input("author");
        $post->save();

        return redirect("/post");
        // return "post created";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $data = array(
            'title'=>$post['title'],
            'post'=>$post
        );        // return Post::find($id);
        return view("posts.show")->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $title ="Edit Post";
        $data = array(
            'title'=>$title,
            'post'=>$post,
        );
        // return "edit $id !";
        return view("posts.edit")->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            'author'=>'required',

        ]);

        $post = Post::find($id);
        $post->title= $request->input("title");
        $post->body= $request->input("body");
        $post->author= $request->input("author");
        $post->save();

        return redirect("/post");
        // return "updating post !";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        Post::destroy($id);
        return redirect("/post");
    }
}
