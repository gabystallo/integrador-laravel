@if(count($errors)>0)
    <div class="col-md-12 alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="col-md-6 form-group">
    <label>Título</label>
    <input type="text" name="titulo" class="form-control" value="{{ old('titulo', $post->titulo) }}">
</div>

<div class="col-md-6 form-group">
    <label>Foto</label>
    @if($post->foto)
        <img src="/storage/posts/fotos/{{ $post->foto }}" width="100%">
    @endif
    <input type="file" name="foto" class="form-control">
</div>

<div class="col-md-12 form-group">
    <label>Bajada</label>
    <textarea name="bajada" class="form-control">{{ old('bajada', $post->bajada) }}</textarea>
</div>

<div class="col-md-12 form-group">
    <label>Texto</label>
    <textarea name="texto" class="form-control">{{ old('texto', $post->texto) }}</textarea>
</div>

<div class="col-md-12 form-group">
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ route('lista-posts') }}" class="btn btn-info">Volver</a>
</div>