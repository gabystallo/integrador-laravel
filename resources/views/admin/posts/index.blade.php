@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Posts</h1>
                </div>

                <div class="panel-body">

                    <div class="row">
                        <div class="col-md-12 text-right">
                            <a href="{{ route('nuevo-post') }}" class="btn btn-primary">Crear un post</a>
                        </div>
                    </div>

                    <hr>

                    <div class="table-responsive">
                        
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Id</th>
                                <th>Título</th>
                                <th>Autor</th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->titulo }}</td>
                                    <td>{{ $post->autor->name }}</td>
                                    <td class="text-right">
                                        <form method="post" action="{{ route('eliminar-post', compact('post')) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <a href="{{ route('editar-post', compact('post')) }}" class="btn btn-sm btn-warning">Editar</a>
                                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                        {{ $posts->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
