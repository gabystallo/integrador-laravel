<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPosts extends Controller
{
    function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	$usuario = Auth::user();
    	$posts = $usuario->posts()->with('autor')->paginate(5);

    	return view('admin.posts.index', compact('posts'));
    }
}
