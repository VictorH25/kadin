@extends('adminlte::page')

@section('title', 'Adicionar Adicional')

@section('content_header')
    <h1>Adicionar Adicional</h1>
@stop

@section('content')
<div class="container">
    <form method="post" action="{{url('/admin/additional/add/store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nome do Adicional:</label>   
            <input name="name_additional" type="text" class="form-control" placeholder="Nome do adicional" required>
        </div>
        <div class="form-group">
            <label>Valor:</label>
            <div class="input-group-prepend">
                <label class="input-group-text">R$:</label>
                <input name="value" type="number" class="form-control" placeholder="Valor" step=".01" required>
            </div>
        </div>
        <div class="form-group">
            <label>Produto associado ao adicional:</label>   
            <select class="custom-select" name="product">
                @foreach ($products as $obj)
                    <option value="{{ $obj->id }}">{{ $obj->name }}</option>
                @endforeach
            </select>
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
