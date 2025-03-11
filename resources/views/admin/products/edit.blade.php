@extends('adminlte::page')

@section('title', 'Editar Produto')

@section('content_header')
    <h1>Editar Produto</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
        </div>
        <div class="col-sm">
            <a class="btn btn-danger" style="float:right; color:white;" href="/admin/product/list/"><i class="fa fa-list"></i> Lista de produtos</a>
        </div>
    </div>
    <form action="{{ route('product.update') }}" method="POST">
        @csrf
        @method('PUT')
        <input name="_method" type="hidden" value="PUT">
        <input name="id" type="hidden" value="{{$product['0']->id}}">
        <div class="form-group">
            <label>Nome do Produto:</label>   
            <input type="text" class="form-control" name="name_product" value="{{$product['0']->name}}" required>
        </div>
        <div class="form-group">
            <label>Valor:</label>
            <div class="input-group-prepend">
                <label class="input-group-text">R$:</label>
                <input type="number" class="form-control" name="value" value="{{$product['0']->value}}" required>
            </div>
        </div>
        <div class="form-group">
            <label>Tipo do Produto:</label>   
            <select class="custom-select" name="type">
                @foreach ($type as $obj)
                    @if(!($obj->id == $product['0']->type_id))
                        <option value="{{ $obj->id }}">{{ $obj->name }}</option>
                    @else
                        <option value="{{ $obj->id }}">{{ $obj->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Ingredientes:</label>    
            <textarea type="text" name="ingredients" class="form-control" placeholder="Ingredientes" rows="6" required>{{$product['0']->ingredients}}</textarea>
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
