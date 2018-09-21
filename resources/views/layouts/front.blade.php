<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
	<link rel="stylesheet" type="text/css" href="/css/estilo.css">
</head>
<body>

	<div id="contenedor-general">
		
		<header>
			<h1>BLOG</h1>
		</header>

		<div class="menu">
			<nav>
				<ul>
					<li><a href="/">Home</a></li>
					<li><a href="/autores">Autores</a></li>
					
					@guest
						<li><a href="/register">Registrarme</a></li>
						<li><a href="/login">Login</a></li>
					@else
						<li><a href="{{ route('lista-posts') }}">Ir al panel</a></li>
					@endguest
				</ul>
			</nav>
		</div>

		@yield('contenido')

		<footer>
			<div class="columna">
				blog copado
			</div>
			<div class="columna">
				<a href="mailto:gaby86@gmail.com">gaby86@gmail.com</a>
			</div>
		</footer>

	</div>

</body>
</html>