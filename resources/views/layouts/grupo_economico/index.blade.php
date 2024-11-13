@extends('layouts.app')

@section('title', 'Grupos Econômicos')

@section('content')
<div class="d-flex justify-content-between align-items-center">
   <h1>Grupos Econômicos</h1>
   <a href="{{ route('grupo_economico.create') }}" class="btn btn-primary">Adicionar Grupo Econômico</a>
</div>

<table class="table mt-4">
   <thead>
      <tr>
         <th>ID</th>
         <th>Nome</th>
         <th>Data de Criação</th>
         <th>Ações</th>
      </tr>
   </thead>
   <tbody>
      @foreach($grupos as $grupo)
      <tr>
         <td>{{ $grupo->id }}</td>
         <td>{{ $grupo->nome }}</td>
         <td>{{ $grupo->created_at->format('d/m/Y') }}</td>
         <td>
            <a href="{{ route('grupo_economico.edit', $grupo->id) }}" class="btn btn-warning btn-sm">Editar</a>
            <form action="{{ route('grupo_economico.destroy', $grupo->id) }}" method="POST" class="d-inline">
               @csrf
               @method('DELETE')
               <button class="btn btn-danger btn-sm">Excluir</button>
            </form>
         </td>
      </tr>
      @endforeach
   </tbody>
</table>
@endsection