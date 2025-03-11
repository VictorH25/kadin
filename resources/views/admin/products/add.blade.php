@extends('adminlte::page')

@section('title', 'Adicionar Produto')

@section('content_header')
    <h1>Adicionar Produto</h1>
@stop

@section('content')
<div class="container">
    <form method="post" action="{{url('/admin/product/add/store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nome do Produto:</label>   
            <input name="name_product" type="text" class="form-control" placeholder="Nome do produto" required>
        </div>
        <div class="form-group">
            <label>Valor:</label>
            <div class="input-group-prepend">
                <label class="input-group-text">R$:</label>
                <input name="value" type="number" class="form-control" placeholder="Valor" step=".01" required>
            </div>
        </div>
        <div class="form-group">
            <label>Tipo do Produto:</label>   
            <select class="custom-select" name="type">
                @foreach ($type as $obj)
                    <option value="{{ $obj->id }}">{{ $obj->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Ingredientes:</label>    
            <textarea type="text" class="form-control" placeholder="Ingredientes" rows="6" name="ingredients" required></textarea>
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
