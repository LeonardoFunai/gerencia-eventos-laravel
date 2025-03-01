<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <title>Gerenciador de Eventos</title>

</head>
<body>
    
    <div class="home-container text-center">
        <h1 class="home-title">Bem-vindo ao Gerenciador de Eventos!</h1>
        <p class="home-description">
            O sistema <span style="color: #FFA500;">ORGANIZA</span>, <span style="color:  #FFA500;">CADASTRA</span>
            e <span style="color: #FFA500;">GERENCIA</span> <br> eventos de forma simples e eficiente.
        </p>

        <h3>Tipos Eventos</h3>
        
        <ul class="home-event-list">
            <li>📌 Eventos Sociais</li>
            <li>🎭 Eventos Culturais</li>
            <li>⚽ Eventos Esportivos</li>
            <li>🏢 Eventos Corporativos</li>
            <li>🙏 Eventos Religiosos</li>
            <li>🎉 Eventos de Entretenimento</li>
            <li>🔍 Outros Tipos de Eventos</li>
        </ul>
        
        <p class="home-subtext">NÃO PERCA TEMPO! CADASTRE AGORA:</p>
        
        <div class="home-buttons">
            <a href="{{ route('events.create') }}" class="btn btn-primary btn-lg">
            <img src="{{ asset('images/cadastrar.png') }}" alt="clear" width="25" height="25">    
            Cadastrar Evento
        </a>
            <a href="{{ route('events.index') }}" class="btn btn-secondary btn-lg">
                <img src="{{ asset('images/lista.png') }}" alt="clear" width="25" height="25">
                Listar Eventos
            </a>
        </div>
    </div>
</body>
</html>