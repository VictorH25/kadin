@extends('adminlte::page')

@section('title', 'Adicionar tipo')

@section('content_header')
    <h1>Adicionar tipo</h1>
@stop

@section('content')
<div class="container">
    <div class="col-sm">
        <a class="btn btn-danger mb-3" style="float:right; color:white;" href="/admin/type/list/"><i class="fa fa-list"></i> Lista de tipo</a>
    </div>
<form method="post" action="{{url('/admin/type/add/store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label>Nome do Tipo:</label>   
        <input name="name_type" type="text" class="form-control" placeholder="Nome do tipo" required>
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
