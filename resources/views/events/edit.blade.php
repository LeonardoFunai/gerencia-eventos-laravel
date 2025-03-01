@extends('layouts.admin')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endsection
<div class="h1">
    <h1 class="til1">Editar Evento</h1>
</div>
@section('content')

<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <div class="box">
        <form method="POST" action="{{ route('events.update', $event) }}">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" class="form-control" value="{{ $event->nome }}" maxlength="255" required>
            </div>
            
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="tipo">Tipo do Evento:</label>
                    <select name="tipo" class="form-control" required>
                        <option value="social" {{ $event->tipo == 'social' ? 'selected' : '' }}>Social</option>
                        <option value="cultural" {{ $event->tipo == 'cultural' ? 'selected' : '' }}>Cultural</option>
                        <option value="esportivo" {{ $event->tipo == 'esportivo' ? 'selected' : '' }}>Esportivo</option>
                        <option value="corporativo" {{ $event->tipo == 'corporativo' ? 'selected' : '' }}>Corporativo</option>
                        <option value="religioso" {{ $event->tipo == 'religioso' ? 'selected' : '' }}>Religioso</option>
                        <option value="entretenimento" {{ $event->tipo == 'entretenimento' ? 'selected' : '' }}>Entretenimento</option>
                        <option value="outros" {{ $event->tipo == 'outros' ? 'selected' : '' }}>Outros</option>
                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <label for="data_hora">Data e Hora:</label>
                    <input type="datetime-local" name="data_hora" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($event->data_hora)) }}" required>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="endereco">Endereço:</label>
                    <input type="text" name="endereco" class="form-control" value="{{ $event->endereco }}" maxlength="255" required>
                </div>
                <div class="col-md-6 form-group">
                    <label for="link_endereco">Link do Endereço (Google Maps):</label>
                    <input type="url" name="link_endereco" class="form-control" value="{{ $event->link_endereco }}" maxlength="500">
                </div>
            </div>
            
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" class="form-control" maxlength="255">{{ $event->descricao }}</textarea>
            </div>
            
            <div class="form-group">
                <label for="preco" style="display: block; text-align: center;">Preço:</label>
                <input type="number" name="preco" class="form-control" style="width: 25%; display: block; margin: 0 auto;" step="0.01" value="{{ $event->preco }}" min="0" max="100000">
            </div>
            
            <div class="submit">
            <button type="submit" class="btn btn-cadastrar" style="text-align: center;font-size: 1.1rem; padding: 10px 25px;">Atualizar Evento</button>
            </div>
            
        </form>
    </div>
</div>
@endsection