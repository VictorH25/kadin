@extends('adminlte::page')

@section('title', 'Editar tipo')

@section('content_header')
    <h1>Editar tipo</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
            <h3 style="text-align:center;">Editar tipo</h3>
        </div>
        <div class="col-sm">
            <a class="btn btn-danger" style="float:right; color:white;" href="/admin/type/list/"><i class="fa fa-list"></i> Lista de tipo</a>
        </div>
    </div>
    <form action="{{ route('type.update') }}" method="POST">
        @csrf
        @method('PUT')
        <input name="_method" type="hidden" value="PUT">
        <input name="id" type="hidden" value="{{$type['0']->id}}">
        <div class="form-group">
            <label>Nome do Produto:</label>   
            <input type="text" class="form-control" name="name_type" value="{{$type['0']->name}}" required>
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
