@extends('adminlte::page')

@section('title', 'Adicionar Cliente')

@section('content_header')
    <h1>Adicionar Cliente</h1>
@stop

@section('content')
<div class="container">
    <h3 class="text-center">Adicionar Cliente</h3>
    <form method="post" action="{{url('/admin/client/add/store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nome completo:</label>   
            <input name="name_client" type="text" class="form-control" placeholder="Nome do cliente" required>
        </div>
        <div class="form-group">
            <label>Telefone:</label>
            <input name="tel" type="tel" class="form-control" placeholder="82 99999-9999" required>
        </div>
        <div class="form-group">
            <label>Endereço:</label>
            <div class="input-group-prepend">
                <label class="input-group-text">Rua: </label>
                <input name="street" type="text" class="form-control" placeholder="Almeida são Benedito" required>
                <label class="input-group-text">Nº</label>
                <input name="number" type="text" class="form-control" placeholder="119" required>
            </div>
        </div>
        <div class="form-group">
            <label>Limite de credito:</label>
            <input name="limit_credit" step="0.01" type="number" class="form-control" placeholder="00,00" required>
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
