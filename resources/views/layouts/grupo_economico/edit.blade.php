@extends('layouts.app')

@section('title', 'Editar Grupo Econômico')

@section('content')
<h1>Editar Grupo Econômico</h1>

<form action="{{ route('grupo_economico.update', $grupo->id) }}" method="POST">
   @csrf
   @method('PUT')
   <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="nome" class="form-control" value="{{ $grupo->nome }}" required>
   </div>
   <button type="submit" class="btn btn-primary mt-2">Atualizar</button>
</form>
@endsection