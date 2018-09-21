@extends('layouts.front')

@section('contenido')
	<section class="posts">
		<h2>Posts</h2>
		<div class="lista">
			@foreach($posts as $post)
			<article class="post">
				<div class="contenido">
					<h3>{{ $post->titulo }}</h3>
					<p>{{ $post->bajada }}</p>
					<div class="autor">Por {{ $post->autor->name }}</div>
					<a href="{{ route('ver-post', compact('post')) }}" class="cover"></a>
				</div>
			</article>
			@endforeach
		</div>
		{{ $posts->links() }}
	</section>
@endsection