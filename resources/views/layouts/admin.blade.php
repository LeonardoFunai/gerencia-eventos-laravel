<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>DESAFIO PROPONTO</title>
</head>
<body>
<nav>
        <a class="link" href="{{ route('home') }}">Início</a> 
        <a class="link" href="{{ route('events.index') }}">Listar Eventos</a> 
</nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
