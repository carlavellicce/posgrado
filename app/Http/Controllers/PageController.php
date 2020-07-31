<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function posts()
    {
        return view('layouts.menu', [
    	'posts' => Post::with('user')->latest()->paginate()
    	]);

    }
    public function post(Post $post)
    {
    	return view('publicacion', ['post' => $post ]);     	
    }

}
