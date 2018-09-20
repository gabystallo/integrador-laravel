<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class Front extends Controller
{
    
	public function home()
	{
		
		$posts = Post::with('autor')->paginate(6);
		return view('principal', compact('posts'));
	}

}
