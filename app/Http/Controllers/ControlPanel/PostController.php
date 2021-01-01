<?php

namespace App\Http\Controllers\ControlPanel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        return view('control panel.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('control panel.posts.add');

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
            'body' => 'required',
            'image_post' => 'required|mimes:jpeg,png,bmp,jpg'
        ];


        $messages = [
            'title.required' => 'The Post title field should be entered',
            'title.max' => 'Title should not be more than 50 character',
        ];

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $post=new Post();
        $post->title=$request->title;
        $post->body=$request->body;
        $post->title=$request->title;
        $post->author_email=Auth::user()->email;

        $file_post_image=$request->file('image_post');
        $fileName=time().'.'.$file_post_image->extension();
        $file_post_image->move('public/imagepost',$fileName);

        $post->large_image=$fileName;
        $post->save();
        return redirect()->route('posts.create')->with('success','تم إنشاء الخبر');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('control panel.posts.edit',compact('post'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
