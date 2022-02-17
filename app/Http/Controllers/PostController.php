<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

use App\Http\Requests\StorePostRequest;
 

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //select
        $posts=Post::all();
        return view('posts.index',["posts"=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $post=new Post();
        $post->title=$request->title;
        $post->description=$request->description;
        $post->user_id=1;
        $post->save();
    //     Post::create([
    //        "title"=>$request->title,
    //        "description"=>$request->description,
    //        "user_id"=>1

    //        ]
    //     );
        return redirect("/posts");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post=Post::find($id);
      return view("posts.show",$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $data=Post::find($id);
        return view("posts.edit",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostRequest $request, $id)
    {
        $post=Post::find($id);
        $post->title=$request->title;
        $post->description=$request->description;
        $post->save();
        return redirect("/posts");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $post=Post::find($id);
       $post->delete();
       return redirect("/posts");
    }
}
