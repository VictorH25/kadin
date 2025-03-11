@extends('adminlte::page')

@section('title', 'Visualizar Adicional')

@section('content_header')
    <h1>Visualizar Adicional</h1>
@stop

@section('content')
<div class="card">

    <div class="container">
            <div class="row" style="margin-top: 10px">
                <div class="col-8">
                    <h3 style="text-align:right;">Informações do adicional</h3>
                </div>
                <div class="col">
                    <a class="btn btn-danger" style="float:right; color:white;" href="/admin/additional/list/"><i class="fa fa-list"></i> Lista de adicionais</a>
                </div>
            </div>
            <p><b>Nome:</b> {{$additional['0']->name}}</p>
            <p><b>Valor:</b> {{$additional['0']->value}}</p>
            <p><b>Tipo:</b> {{$additional['0']->product}}</p>
            <p><b>Data de criação:</b> {{$additional['0']->created_at}}</p>
            <p><b>Data da ultima atualização:</b> {{$additional['0']->updated_at}}</p>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
