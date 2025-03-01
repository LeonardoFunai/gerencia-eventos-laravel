@extends('layouts.admin')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/visualizar.css') }}">
@endsection
<div class="h1">
        <h1 class="til1">VISUALIZAR EVENTO</h1>
</div>
@section('content')

<div class="card mt-4 mb-4 shadow" style="color: black; max-width: 800px; background:rgb(255, 255, 255); padding: 20px; border-radius: 10px;">

    <div class="card-header d-flex justify-content-between align-items-center">
        <span class="titulo">Dados do Evento</span>

        <div class=" gap-3">
            <a href="{{ route('events.edit', $event) }}" class="btn btn-sm editar" style="padding: 10px 15px;border: none;">
                <img src="{{ asset('images/editar.png') }}" alt="clear" width="25" height="25">
            </a>

            <form method="POST" action="{{ route('events.destroy', ['event' => $event->id]) }}" class="d-inline">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-sm apagar" style="padding: 10px 15px;border: none;"
                    onclick="return confirm('Tem certeza que deseja apagar este evento?')">
                        <img src="{{ asset('images/apagar.png') }}" alt="clear" width="25" height="25">
                </button>
            </form>
        </div>
    </div>

    <div class="card-body" style="color: black; max-width: 700px; background:rgb(255, 255, 255); padding: 30px; border-radius: 10px;">
        <x-alert />

        <div class="info-container">
            <div class="info-col">
                <p><strong>ID:</strong> {{ $event->id }}</p>
                <p><strong>Nome:</strong> {{ $event->nome }}</p>
                <p><strong>Tipo:</strong> {{ ucfirst($event->tipo) }}</p>
                <p><strong>Descrição:</strong> {{ $event->descricao ?? 'Sem descrição' }}</p>
                <p><strong>Endereço:</strong> {{ $event->endereco }}</p>
            </div>
            <div class="info-col">
                <p><strong>Data e Hora:</strong> {{ \Carbon\Carbon::parse($event->data_hora)->format('d/m/Y H:i') }}</p>
                <p><strong>Preço:</strong> R$ {{ number_format($event->preco, 2, ',', '.') }}</p>
                <p><strong>Link do Endereço:</strong> <a href="{{ $event->link_endereco }}" target="_blank">Abrir no Google Maps</a></p>
                <p><strong>Cadastrado:</strong> {{ \Carbon\Carbon::parse($event->created_at)->format('d/m/Y H:i:s') }}</p>
                <p><strong>Editado:</strong> {{ \Carbon\Carbon::parse($event->updated_at)->format('d/m/Y H:i:s') }}</p>
            </div>
        </div>
    </div>
</div>

@endsection
