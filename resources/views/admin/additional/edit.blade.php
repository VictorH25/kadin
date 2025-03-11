@extends('adminlte::page')

@section('title', 'Editar Adicional')

@section('content_header')
    <h1>Editar Adicional</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
            <h3 style="text-align:center;">Editar Adicional</h3>
        </div>
        <div class="col-sm">
            <a class="btn btn-danger" style="float:right; color:white;" href="/admin/additional/list/"><i class="fa fa-list"></i> Lista de adicionais</a>
        </div>
    </div>
    <form action="{{ route('additional.update') }}" method="POST">
        @csrf
        @method('PUT')
        <input name="_method" type="hidden" value="PUT">
        <input name="id" type="hidden" value="{{$additional['0']->id}}">
        <div class="form-group">
            <label>Nome do Adicional:</label>   
            <input type="text" class="form-control" name="name_additional" value="{{$additional['0']->name}}" required>
        </div>
        <div class="form-group">
            <label>Valor:</label>
            <div class="input-group-prepend">
                <label class="input-group-text">R$:</label>
                <input type="number" class="form-control" name="value" value="{{$additional['0']->value}}" step=".01" required>
            </div>
        </div>
        <div class="form-group">
            <label>Produto associado ao adicional:</label>   
            <select class="custom-select" name="product">
                <option value="{{ $additional['0']->product_id }}" selected>{{ $additional['0']->product }}</option>
                @foreach ($products as $obj)
                    @if(!($obj->id==$additional['0']->product_id))
                        <option value="{{ $obj->id }}">{{ $obj->name }}</option>
                    @endif
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
