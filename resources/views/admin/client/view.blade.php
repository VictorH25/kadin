@extends('adminlte::page')

@section('title', 'Visualizar Clientes')

@section('content_header')
    <h1>Visualizar Clientes</h1>
@stop
    
@section('content')
<div class="card">

    <div class="container">
            <div class="row" style="margin-top: 10px">
                <div class="col-sm">
                </div>
                <div class="col-sm">
                </div>
                <div class="col-sm">
                    <a class="btn btn-danger" style="float:right; color:white;" href="/admin/client/"><i class="fa fa-list"></i> Lista de clientes</a>
                </div>
            </div>
            <p><b>Nome:</b> {{$client['0']->name}}</p>
            <p><b>Telefone:</b> {{$client['0']->telephone}}</p>
            <p><b>Rua:</b> {{$client['0']->street}} <b>Numero:</b> {{$client['0']->number}}</p>
            <p><b>Limite de credito:</b> {{$client['0']->limit_credit}}</p>
    
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
