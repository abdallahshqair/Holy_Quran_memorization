<?php

namespace App\Http\Controllers\PublicWebsite;
use App\Http\Controllers\Controller;

use App\Models\Post;

class PublicWebsitePostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return view('public website.index',compact('posts'));
    }


}
