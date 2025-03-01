@extends('layouts.admin')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@endsection
@section('content')
    <div class="h1">
        <h1 class="til1">TODOS OS EVENTOS</h1>
    </div>
    <a href="{{ route('events.create') }}" class="btn btn-cadastrar">
        <img src="{{ asset('images/novo.png') }}" alt="Add" width="30" height="30">
        Novo Evento
    </a>
    <div class="card mt-4 mb-4 ">
        <div class="card-header hstack gap-2">
            <span class="titulo" style="color: black">Lista de Eventos</span>
            <span class="ms-auto">
                <button class="btn btn-dark btn-filtro" onclick="toggleFiltro()">
                    <img src="{{ asset('images/filter-icon.png') }}" alt="Filtrar" width="20" height="20">
                    Filtro
                </button>
            </span>
        </div>

        <div class="card-body">
            <x-alert />

            <!-- Filtro -->
            <div id="filtroContainer" class="mb-3 {{ request()->hasAny(['nome', 'tipo', 'data_de', 'data_ate']) ? '' : 'd-none' }}">
                <form method="GET" action="{{ route('events.index') }}">
                    <div class="row g-2">
                        <div class="col">
                            <input type="text" name="nome" class="form-control" placeholder="Nome do evento" value="{{ request('nome') }}">
                        </div>
                        <div class="col">
                            <select name="tipo" class="form-control">
                                <option value="">Todos os tipos</option>
                                <option value="social" @if(request('tipo') == 'social') selected @endif>Social</option>
                                <option value="cultural" @if(request('tipo') == 'cultural') selected @endif>Cultural</option>
                                <option value="esportivo" @if(request('tipo') == 'esportivo') selected @endif>Esportivo</option>
                                <option value="corporativo" @if(request('tipo') == 'corporativo') selected @endif>Corporativo</option>
                                <option value="religioso" @if(request('tipo') == 'religioso') selected @endif>Religioso</option>
                                <option value="entretenimento" @if(request('tipo') == 'entretenimento') selected @endif>Entretenimento</option>
                                <option value="outros" @if(request('tipo') == 'outros') selected @endif>Outros</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="date" name="data_de" class="form-control" value="{{ request('data_de') }}">
                        </div>
                        <div class="col">
                            <input type="date" name="data_ate" class="form-control" value="{{ request('data_ate') }}">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-dark btn-filtro">
                                <img src="{{ asset('images/lupa.png') }}" alt="Filtrar" width="25" height="25">
                                Buscar
                            </button>
                            <a href="{{ route('events.index') }}" class="btn btn-dark btn-filtro">
                                <img src="{{ asset('images/clear.png') }}" alt="clear" width="25" height="25">
                                Limpar
                            </a>
                        </div>
                    </div>
                </form>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Tipo</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Data</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Preço</th>
                        <th scope="col" class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                        <tr>
                            <td>{{ ucfirst($event->tipo) }}</td>
                            <td>{{ $event->nome }}</td>
                            <td>{{ $event->endereco }}</td>
                            <td>{{ \Carbon\Carbon::parse($event->data_hora)->format('d/m/Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($event->data_hora)->format('H:i') }}</td>
                            <td>R$ {{ number_format($event->preco, 2, ',', '.') }}</td>
                            <td class="text-center">
                                <a href="{{ route('events.show', $event) }}" class="btn btn-sm btn-visualizar">
                                    <img src="{{ asset('images/visualizar.png') }}" alt="clear" width="25" height="25">
                                </a>
                                <a href="{{ route('events.edit', $event) }}" class="btn btn-sm editar" style="border: none;">
                                    <img src="{{ asset('images/editar.png') }}" alt="clear" width="25" height="25">
                                </a>
                                <form action="{{ route('events.destroy', $event) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm apagar" style="border: none;"
                                    onclick="return confirm('Tem certeza que deseja apagar este evento?')">
                                        <img src="{{ asset('images/apagar.png') }}" alt="clear" width="25" height="25">
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Paginação -->
            <div class="d-flex justify-content-center mt-3">
                {{ $events->links() }}
            </div>
        </div>
    </div>

    <script>
        function toggleFiltro() {
            let filtro = document.getElementById('filtroContainer');
            filtro.classList.toggle('d-none');
        }
    </script>
@endsection
