@extends('adminlte::page')

@section('title', 'Visualizar Tipos')

@section('content_header')
    <h1>Visualizar Tipos</h1>
@stop

@section('content')
<div class="card">

    <div class="container">
            <div class="row" style="margin-top: 10px">
                <div class="col-sm">
                </div>
                <div class="col-sm">
                    <h3 style="text-align:center;">Informações do tipo</h3>
                </div>
                <div class="col-sm">
                    <a class="btn btn-danger" style="float:right; color:white;" href="/admin/type/list/"><i class="fa fa-list"></i> Lista de tipo</a>
                
                </div>
            </div>
            <p><b>Nome:</b> {{$type['0']->name}}</p>
            <p><b>Data de criação:</b> {{$type['0']->created_at}}</p>
            <p><b>Data da ultima atualização:</b> {{$type['0']->updated_at}}</p>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
