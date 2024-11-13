<div>
    <input type="text" class="form-control" placeholder="Buscar grupos" wire:model="search">

    <ul class="list-group mt-3">
        @foreach($grupos as $grupo)
        <li class="list-group-item">{{ $grupo->nome }}</li>
        @endforeach
    </ul>
</div>