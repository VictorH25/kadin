@extends('adminlte::page')

@section('title', 'Editar Cliente')

@section('content_header')
    <h1>Editar Cliente</h1>
@stop

@section('content')
<div class="container">
    <h3 class="text-center">Editar Cliente</h3>
    <form method="post" action="{{url('/admin/client/edit/update', $client[0]->id)}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input name="id" type="number" value="{{$client[0]->id}}" hidden required>
        </div>
        <div class="form-group">
            <label>Nome completo:</label>   
            <input name="name_client" type="text" class="form-control" placeholder="Nome do cliente" value="{{$client[0]->name}}" required>
        </div>
        <div class="form-group">
            <label>Telefone:</label>
            <input name="tel" type="tel" class="form-control" placeholder="82 99999-9999" value="{{$client[0]->telephone}}" required>
        </div>
        <div class="form-group">
            <label>Endereço:</label>
            <div class="input-group-prepend">
                <label class="input-group-text">Rua: </label>
                <input name="street" type="text" class="form-control" placeholder="Almeida são Benedito" value="{{$client[0]->street}}" required>
                <label class="input-group-text">Nº</label>
                <input name="number" type="text" class="form-control" placeholder="119" value="{{$client[0]->number}}" required>
            </div>
        </div>
        <div class="form-group">
            <label>Limite de credito:</label>
            <input name="limit_credit" step="0.01" type="number" class="form-control" placeholder="00,00" value="{{$client[0]->limit_credit}}" required>
        </div>
        <div class="form-group"> 
            <button type="submit" class="btn btn-success btn-lg btn-block">Salvar</button>
        </div>
    </form>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
