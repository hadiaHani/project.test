<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $posts=Post::all();
        return $posts;

          /*  $posts=Post::select('id','title','views')->where('views','>',50)->get();
        $count=count ($posts);
        return response([
            'status'=>'success',
            'count'=>$count,
            'data'=>$posts


        ]);*/

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|max:50',
            'code'=>'required|unique:posts|integer',
            'body' => 'required',
            'category_id' => 'required|integer',
            'author_email' => 'required|email',
        ];


        $messages = [
            'title.required' => 'The Post title field should be entered',
            'title.max' => 'Title should not be more than 50 character',
            'code.unique' => 'Post code should not duplicated'
        ];

        $validator=Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){

            return response([
                'status'=> 'error',
                'errors'=> $validator->errors()

            ]);        }

       $post= Post::create([
            'title'=> $request-> title,
            'body'=> $request-> body,
            'code'=> $request-> code,
            'category_id'=> $request-> category_id,
            'author_email'=> $request-> author_email,

        ]);

       return response([
           'status'=> 'post created successfully',
           'post'=> $post

       ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
           return  response([
            'status'=> 'success',
            'data'=> $post

        ]);
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:50',
            'code'=>'required|unique:posts|integer',
            'body' => 'required',
            'category_id' => 'required|integer',
            'author_email' => 'required|email',
        ];


        $messages = [
            'title.required' => 'The Post title field should be entered',
            'title.max' => 'Title should not be more than 50 character',
            'code.unique' => 'Post code should not duplicated'
        ];

        $validator=Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){

            return response([
                'status'=> 'error',
                'errors'=> $validator->errors()

            ]);        }

           $post-> title= $request-> title;
            $post-> body= $request-> body;
            $post-> code= $request-> code;
            $post-> category_id= $request-> category_id;
            $post-> author_email= $request-> author_email;

          $post->save();

        return response([
            'status'=> 'post updated successfully',
            'post'=> $post

        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
          $post->delete();
    return response([

        'status'=>'post deleted successfully',
        'post'=>$post
    ]);
    }
}
