<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);

    }

    public function index()
    {
        $archives= Post::archives();
        $posts= Post::latest()
            ->filter(request(['month', 'year']))
            ->get();

        return view('post.index', compact('posts','archives'));
    }

    public function create()
    {
        return view('post.create');
    }
    public  function show(Post $post)
    {
        return view('layouts.show',compact('post'));
    }
    public function store()
    {
        $this->validate(request(),[
            'title'=> 'required',
            'body'=> 'required'
        ]);
        auth()->user()->publish(
            new Post(request(['title','body']))
        );

        return redirect('/');
    }

}
