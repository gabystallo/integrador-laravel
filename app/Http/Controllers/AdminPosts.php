<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Post;

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

    public function nuevo()
    {
        $post = new Post;
        return view('admin.posts.nuevo', compact('post'));
    }

    public function crear(Request $request)
    {
        $this->validate(
            $request,
            [
                'titulo' => 'required|max:100',
                'bajada' => 'required',
                'texto' => 'required',
                'foto' => 'nullable|image'
            ]
        );

        $post = new Post;
        $post->fill($request->all());

        $usuario = Auth::user();
        $usuario->posts()->save($post);

        $foto = $request->file('foto');
        if($foto) {
            $nombre = $post->id . '.' . $foto->extension();
            $foto->storeAs('public/posts/fotos', $nombre);
            $post->foto = $nombre; //'/storage/...  ->   /storage/public/...'
            $post->save();
        }

        return redirect()->route('lista-posts');
    }

    public function editar(Post $post)
    {
        return view('admin.posts.editar', compact('post'));
    }

    public function guardar(Post $post, Request $request)
    {
        $this->validate(
            $request,
            [
                'titulo' => 'required|max:100',
                'bajada' => 'required',
                'texto' => 'required',
                'foto' => 'nullable|image'
            ]
        );

        $post->fill($request->all());

        $foto = $request->file('foto');
        if($foto) {
            $nombre = $post->id . '.' . $foto->extension();
            $foto->storeAs('public/posts/fotos', $nombre);
            $post->foto = $nombre; //'/storage/...  ->   /storage/public/...'
        }

        $post->save();

        return redirect()->route('lista-posts');
    }

    public function eliminar(Post $post)
    {
        $post->delete();
        return redirect()->route('lista-posts');
    }
}
