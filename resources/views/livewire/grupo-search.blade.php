<div>
    <input type="text" wire:model="search" class="mb-4 p-2 border border-gray-300 rounded-md" placeholder="Buscar Grupo Econômico...">

    <table class="min-w-full border-collapse">
        <thead>
            <tr>
                <th class="px-6 py-2 border-b">ID</th>
                <th class="px-6 py-2 border-b">Nome</th>
            </tr>
        </thead>
        <tbody>
            @foreach($grupos as $grupo)
            <tr>
                <td class="px-6 py-2 border-b">{{ $grupo->id }}</td>
                <td class="px-6 py-2 border-b">{{ $grupo->nome }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>