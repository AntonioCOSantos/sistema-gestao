@extends('layouts.app')
@livewire('grupo-search')


@section('content')
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
   <h2 class="text-2xl font-bold mb-4">Grupos Econômicos</h2>
   <a href="{{ route('grupos.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md mb-4 inline-block">Criar Novo Grupo</a>

   <table class="min-w-full border-collapse">
      <thead>
         <tr>
            <th class="px-6 py-2 border-b">ID</th>
            <th class="px-6 py-2 border-b">Nome</th>
            <th class="px-6 py-2 border-b">Data de Criação</th>
            <th class="px-6 py-2 border-b">Última Atualização</th>
            <th class="px-6 py-2 border-b">Ações</th>
         </tr>
      </thead>
      <tbody>
         @foreach($grupos as $grupo)
         <tr>
            <td class="px-6 py-2 border-b">{{ $grupo->id }}</td>
            <td class="px-6 py-2 border-b">{{ $grupo->nome }}</td>
            <td class="px-6 py-2 border-b">{{ $grupo->created_at }}</td>
            <td class="px-6 py-2 border-b">{{ $grupo->updated_at }}</td>
            <td class="px-6 py-2 border-b">
               <a href="{{ route('grupos.edit', $grupo) }}" class="text-blue-500">Editar</a>
               <form action="{{ route('grupos.destroy', $grupo) }}" method="POST" class="inline-block ml-2">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="text-red-500">Deletar</button>
               </form>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
</div>
@endsection