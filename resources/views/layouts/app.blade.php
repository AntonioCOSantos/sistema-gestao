<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Gestão de Grupos</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('grupo_economico.index') }}">Gestão de Grupos</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('grupo_economico.index') }}">Grupos Econômicos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('bandeira.index') }}">Bandeiras</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('unidade.index') }}">Unidades</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('colaborador.index') }}">Colaboradores</a>
            </li>
        </ul>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
</body>

</html>