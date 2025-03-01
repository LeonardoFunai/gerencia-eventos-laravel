@extends('layouts.admin')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endsection
<div class="h1">
    <h1 class="til1">Criar Novo Evento</h1>
</div>
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="box">
<form method="POST" action="{{ route('events.store') }}">
        @csrf

        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="tipo">Tipo do Evento:</label>
                <select name="tipo" class="form-control" required>
                    <option value="">Selecione o tipo</option>
                    <option value="social">Social</option>
                    <option value="cultural">Cultural</option>
                    <option value="esportivo">Esportivo</option>
                    <option value="corporativo">Corporativo</option>
                    <option value="religioso">Religioso</option>
                    <option value="entretenimento">Entretenimento</option>
                    <option value="outros">Outros</option>
                </select>
            </div>
            <div class="col-md-6 form-group">
                <label for="data_hora">Data e Hora:</label>
                <input type="datetime-local" name="data_hora" class="form-control" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" class="form-control" required>
            </div>
            <div class="col-md-6 form-group">
                <label for="link_endereco">Link do Endereço (Google Maps):</label>
                <input type="url" name="link_endereco" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="preco" style=" display: block; text-align: center; margin: 0 auto;">Preço:</label>
            <input type="number" name="preco" class="form-control" style="width: 25%; display: block; margin: 0 auto;" step="0.01">

        </div>
        <div class="submit">
            <button  type="submit" class="btn btn-cadastrar" style="text-align: center;font-size: 1.1rem; padding: 10px 25px;">Criar Evento</button>
        </div>
       
    </form>
</div>  
   

@endsection
