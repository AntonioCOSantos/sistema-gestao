@extends('layouts.app')

@section('title', 'Adicionar Grupo Econômico')

@section('content')
<h1>Adicionar Grupo Econômico</h1>

<form action="{{ route('grupo_economico.store') }}" method="POST">
   @csrf
   <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="nome" class="form-control" required>
   </div>
   <button type="submit" class="btn btn-primary mt-2">Salvar</button>
</form>
@endsection